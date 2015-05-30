<?php
class UserServices
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo=$pdo;
  }
  public function checkCredentials($email,$pass,$remember)
  {
    if($this->hasLoginDelay())
    {
      $username=filter_var($email,FILTER_SANITIZE_EMAIL);
      $password=filter_var($pass,FILTER_SANITIZE_STRING);
      $remember=filter_var($remember,FILTER_VALIDATE_BOOLEAN);
      $findUser=$this->pdo->prepare("SELECT * FROM Users WHERE username=:username");
      $findUser->execute(array(":username" => $username));

      if($findUser->rowCount()===0)
      {
        $error="userpass";
        return array(false,$error);
      }
      $userDetails=$findUser->fetch(PDO::FETCH_ASSOC);
      if(password_verify($password,$userDetails["password"]))
      {
        if($remember)
          $this->setCookie($userDetails);

        $this->setSessions($userDetails,$this->findIP());
        $this->resetAttempts();
        return array(true,"");
      }
      else
      {
        $error="userpass";
        return array(false,$error);
      }
    }
    else
    {
      $error="attempts";
      return array(false,$error);
    }
  }
  private function hasLoginDelay()
  {
    $grabIPuser=$this->pdo->prepare("SELECT * FROM Attempted_Logins WHERE ip_address = :ip_address");
    $grabIPuser->execute(array(":ip_address" => $this->findIP()));
    if($grabIPuser->rowCount()===0)
    {
      $insertIPdetails=$this->pdo->prepare("INSERT INTO Attempted_Logins (ip_address,login_attempts,last_login_time) VALUES(:ip_address,:login_attempts,:last_login_time)");
      $insertIPdetails->execute(array(":ip_address" => $this->findIP(),":login_attempts" => 0,":last_login_time" => $this->getDateTime("now","Y-m-d H:i:s")));
      return true;
    }
    else
    {
      $ipUserDetails=$grabIPuser->fetch(PDO::FETCH_ASSOC);
      $lastTimeAttempt=$this->getDateTime($ipUserDetails["last_login_time"],false);

      $timeDiff=$lastTimeAttempt->diff($this->getDateTime("now",false));
      if($timeDiff->format("%s")>2)
        return $this->hasExceededMaxAttempts($ipUserDetails,$timeDiff);
      else
        return false;
    }
  }
  private function hasExceededMaxAttempts($dbIpUser,$timeDiff)
  {
    if($dbIpUser["login_attempts"]<5)
    {
      $updateAttempts=$this->pdo->prepare("UPDATE Attempted_Logins SET login_attempts=:login_attempts WHERE ip_address=:ip_address");
      $updateAttempts->execute(array(":ip_address" => $dbIpUser["ip_address"],":login_attempts" => $dbIpUser["login_attempts"]+1));
      return true;
    }
    else
    {
      if($timeDiff->format("%i")>=15 || $timeDiff->format("%h")>0 || $timeDiff->format("%d")>0)
      {
        $updateAttempts=$this->pdo->prepare("UPDATE Attempted_Logins SET login_attempts=0,last_login_time=:last_login_time WHERE ip_address=:ip_address");
        $updateAttempts->execute(array(":last_login_time" => $this->getDateTime("now","Y-m-d H:i:s"),":ip_address" => $dbIpUser["ip_address"]));
        return true;
      }
      else
      {
        $updateAttempts=$this->pdo->prepare("UPDATE Attempted_Logins SET login_attempts=:login_attempts WHERE ip_address=:ip_address");
        $updateAttempts->execute(array(":login_attempts" => $dbIpUser["login_attempts"]+1,":ip_address" => $dbIpUser["ip_address"]));
        return false;
      }
    }
  }
  private function setCookie($userInfo)
  {
    setcookie("rememberMe",$userInfo["authkey"],time() + (86400 * 14),"/");
  }
  public function userCookies($loginCookie,$action)
  {
    $cookieUser=$this->pdo->prepare("SELECT * FROM Users WHERE authkey=:authkey");
    $cookieUser->execute(array(":authkey" => $loginCookie));

    if($cookieUser->rowCount()===0)
      return false;
    else
    {
      if($action==="compare")
        return $cookieUser["authkey"];
      else if($action==="set")
        $this->setSessions($cookieUser);
      else
        return null;
    }
  }
  private function setSessions($userDBinfo)
  {
    $_SESSION["loggedin"]=true;
    $_SESSION["username"]=$userDBinfo["username"];
    $_SESSION["userID"]=$userDBinfo["id"];
    $_SESSION["firstname"]=$userDBinfo["firstname"];
    $_SESSION["lastname"]=$userDBinfo["lastname"];
    $_SESSION["joindate"]=$userDBinfo["joindate"];
  }
  private function getDateTime($when,$format)
  {
    $instance=new DateTime($when);
    if($format)
      return $instance->format($format);
    else
      return $instance;
  }
  private function findIP()
  {
    return $_SERVER["REMOTE_ADDR"];
  }
  private function resetAttempts()
  {
    $resetAttempts=$this->pdo->prepare("UPDATE Attempted_Logins SET login_attempts=0,last_login_time=:last_login_time WHERE ip_address=:ip_address");
    $resetAttempts->execute(array(":last_login_time" => $this->getDateTime("now","Y-m-d H:i:s"),":ip_address" => $this->findIP()));
  }
  public function newAuthKey($userID)
  {
    $resetAuthKey=$this->pdo->prepare("UPDATE Users SET authkey=:authkey WHERE id=:userid");
    $resetAuthKey->execute(array(":authkey" => $this->createToken(16),":userid" => $userID));
  }
  public function createToken($crypLength)
  {
    return bin2hex(openssl_random_pseudo_bytes($crypLength));
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
        $insertSub=$this->pdo->prepare("INSERT INTO Subscribers (email, activationKey, confirmed) VALUES (:email, $this->createToken(16), 0)");
        $insertSub->execute(array(":email" => $subscriber));
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