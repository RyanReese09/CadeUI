<?php
class Email
{
  public function __construct($address, $authKey)
  {
    $this->address=$address;
    $this->authKey=$authKey;
    $headers = 'From: admin@codefundamentals.com' . "\r\n" ;
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail("sportsdude.reese@gmail.com", "subject", "body", $headers);
  }
}
?>