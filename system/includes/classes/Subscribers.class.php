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
        $insertSub=$this->pdo->prepare("INSERT INTO Subscribers (email, joinDate, activationKey, confirmed) VALUES (:email, :joinDate, :validToken, 0)");
        $insertSub->execute(array(":email" => $subscriber, ":joinDate" => $dateFormat->returnDateTime("now","Y-m-d H:i:s"), ":validToken" => bin2hex(openssl_random_pseudo_bytes(32))));
        //Need to e-mail now
        return array(true,"");
      }
      else
        return array(false,"doubleentry");
    }
    else
      return array(false,"format");
  }
}
?>