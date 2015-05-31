<?php
require "PHPMailer/PHPMailerAutoload.php";
class Email
{
  public function __construct($address, $authKey)
  {
    $this->address=$address;
    $this->authKey=$authKey;
  }
  public function welcomeEmail()
  {
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host="mail.codefundamentals.com";
    $mail->SMTPAuth=true;
    $mail->Username="admin@codefundamentals.com";
    $mail->Password="RubiksCubes09!";
    $mail->SMTPSecure="tls";
    $mail->Port=25;
    $mail->From="admin@codefundamentals.com";
    $mail->FromName="Celebrate! You're subscribed!";
    $mail->addAddress($this->address);
    $mail->isHTML(true);
    $mail->Subject="You're subscribed to the CadeUI Newsletter";
    $mail->Body=$this->authKey;

    $mail->send();
  }
}
?>