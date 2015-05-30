<?php
class Email
{
  public function __construct($address, $authKey)
  {
    $this->address=$address;
    $this->authKey=$authKey;
    mail("sportsdude.reese@gmail.com","subject", "work?!");
  }
}
?>