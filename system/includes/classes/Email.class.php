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
    $mail->Host = "localhost";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "admin@codefundamentals.com";                 // SMTP username
    $mail->Password = "RubiksCubes09!";                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    $mail->From = 'admin@codefundamentals.com';
    $mail->FromName = 'Mailer';
    $mail->addAddress('sportsdude.reese@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo('admin@codefundamentals.com', 'Information');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send())
    {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
      echo 'Message has been sent';
    }
  }
}
?>