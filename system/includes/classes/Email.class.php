<?php
class Email
{
  public function __construct($address, $authKey)
  {
    $this->address=$address;
    $this->authKey=$authKey;
  }
  public function subscriber()
  {
    $test=mail("sportsdude.reese@gmail.com", "subject", "body");
    if($test)
      return true;
    else
      return false;
    
  }
}
?>