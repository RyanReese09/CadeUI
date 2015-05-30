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
    require_once("/cadeui/system/includes/PHPMailer/PHPMailerAutoload.php");

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "mail.codefundamentals.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "admin@codefundamentals.com";                 // SMTP username
    $mail->Password = "RubiksCubes09!";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 25;
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