<?php
class Subscribers
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo=$pdo;
  }
  public function createToken($crypLength)
  {
    return bin2hex(openssl_random_pseudo_bytes($crypLength));
  }
  private function getDateTime($when,$format)
  {
    $instance=new DateTime($when);
    if($format)
      return $instance->format($format);
    else
      return $instance;
  }
  public function newSubscriber($email)
  {
    $subscriber=filter_var($email, FILTER_VALIDATE_EMAIL);
    if($subscriber)
    {
      $findSub=$this->pdo->prepare("SELECT * FROM Subscribers WHERE email=:email");
      $findSub->execute(array(":email" => $subscriber));

      if($findSub->rowCount()===0)
      {
        $insertSub=$this->pdo->prepare("INSERT INTO Subscribers (email, joinDate, activationKey, confirmed) VALUES (:email, :joinDate, :validToken, 0)");
        $insertSub->execute(array(":email" => $subscriber, ":joinDate" => $this->getDateTime("now","Y-m-d H:i:s"), ":validToken" => $this->createToken(32)));
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