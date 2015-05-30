<?php
require "../PHPMailer/PHPMailerAutoload.php";
class Email
{
  public function __construct($address, $authKey)
  {
    $this->address=$address;
    $this->authKey=$authKey;
  }
  public function subscriber()
  {
    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers. Try localhost if this fails -RR
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "admin@codefundamentals.com";                 // SMTP username
    $mail->Password = "RubiksCubes09!";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->From = 'admin@codefundamentals.com';
    $mail->FromName = 'Mailer';
    $mail->addAddress('sportsdude.reese@gmail.com', 'Joe User');
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send())
    {
      return false;
      //$mail->ErrorInfo;
    }
    else
    {
      return true;
    }
  }
}
?>