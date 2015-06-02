<?php
class Subscribers
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo=$pdo;
  }
  public function newSubscriber($email)
  {
    $subscriber=filter_var($email, FILTER_VALIDATE_EMAIL);
    $dateFormat=new DateFormat();
    if($subscriber)
    {
      $findSub=$this->pdo->prepare("SELECT * FROM Subscribers WHERE email=:email");
      $findSub->execute(array(":email" => $subscriber));

      if($findSub->rowCount()===0)
      {
        $authKey=bin2hex(openssl_random_pseudo_bytes(32));
        $insertSub=$this->pdo->prepare("INSERT INTO Subscribers (email, joinDate, activationKey, confirmed) VALUES (:email, :joinDate, :validToken, \"no\")");
        $insertSub->execute(array(":email" => $subscriber, ":joinDate" => $dateFormat->returnDateTime("now","Y-m-d H:i:s"), ":validToken" => $authKey));
        
        $welcome=new Email($subscriber,$authKey);
        $welcome->welcomeEmail();
        return array(true,$subscriber);
      }
      else
        return array(false,"doubleentry");
    }
    else
      return array(false,"format");
  }
  public function unsubscribe($email)
  {
    $subEmail=filter_var($email,FILTER_VALIDATE_EMAIL);
    if($subEmail)
    {
      $deleteSub=$this->pdo->prepare("DELETE FROM Subscribers WHERE email=:email");
      $deleteSub->execute(array(":email" => $subEmail));
      $countDeletedSubs=$deleteSub->rowCount();
      if($countDeletedSubs>0)
        return array(true,"");
      else
        return array(false,"notfound");
    }
    else
      return array(false,"format");
  }
  public function activate($activationKey)
  {
    $findSub=$this->pdo->prepare("SELECT * FROM Subscribers WHERE activationKey=:activationKey");
    $findSub->execute(array(":activationKey" => $activationKey));
    
    $subDetails=$findSub->fetch(PDO::FETCH_ASSOC);
    
    if($findSub->rowCount()>0)
    {
      var_dump($subDetails["confirmed"]);
      if($subDetails["confirmed"]==="yes")
        return array(false,"alreadyactivated");
      else
      {
        $activateSub=$this->pdo->prepare("UPDATE Subscribers SET confirmed=\"yes\" WHERE activationKey=:activationKey");
        $activateSub->execute(array(":activationKey" => $activationKey));
        return array(true,"");
      }
    }
    else
      return array(false,"notfound");
  }
}
?>