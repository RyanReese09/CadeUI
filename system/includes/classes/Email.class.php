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
    $mail->FromName="CadeUI Newsletter Subscription";
    $mail->addAddress($this->address);
    $mail->isHTML(true);
    $mail->Subject="You're subscribed to the CadeUI Newsletter";
    $mail->Body='<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta charset="UTF-8">
<title>You\'re subscribed to the CadeUI Newsletter</title>
</head>
<body bgcolor="#f6f6f6" style="margin:0;padding:0;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;width: 100%!important;height: 100%;">
<table style="width:100%;padding:20px;" bgcolor="#f6f6f6">
  <tr>
    <td></td>
    <td style="border:1px solid #f0f0f0;padding:15px;display: block!important;max-width: 600px!important;margin: 0 auto!important;clear: both!important;" bgcolor="#FFFFFF">
      <div style="max-width: 600px;margin: 0 auto;display: block;">
        <table style="width:100%;">
          <tr>
            <td>
              <table style="width:100%;">
                <tr>
                  <td style="padding:10px 0;">
                    <p style="padding-bottom:font-size:14px;font-weight:normal;"><a href="http://www.codefundamentals.com/cadeui/activate?id='.$this->authKey.'" style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;font-size: 100%;text-decoration: none;color: #FFF;background-color: #348eda;border: solid #348eda;border-width: 10px 20px;line-height: 2;font-weight: bold;margin-right: 10px;text-align: center;cursor: pointer;display: inline-block;border-radius: 25px;">Activate your e-mail</a></p>
                  </td>
                </tr>
              </table>
              <h1 style="font-size:36px;font-family: \'Helvetica Neue\', Helvetica, Arial, \'Lucida Grande\', sans-serif;color: #000;margin: 20px 0 10px;line-height: 1.2;font-weight: 200;">Header (h1) text here</h1>
              <h2 style="font-size:28px;font-family: \'Helvetica Neue\', Helvetica, Arial, \'Lucida Grande\', sans-serif;color: #000;margin: 20px 0 10px;line-height: 1.2;font-weight: 200;">Header (h2) text here</h2>
              <h3 style="font-size:22px;font-family: \'Helvetica Neue\', Helvetica, Arial, \'Lucida Grande\', sans-serif;color: #000;margin: 20px 0 10px;line-height: 1.2;font-weight: 200;">Header (h3) text here</h3>
              <p style="padding-bottom:font-size:14px;font-weight:normal;">Thanks, have a lovely day.</p>
            </td>
          </tr>
        </table>
      </div>
    </td>
    <td></td>
  </tr>
</table>
<table style="width:100%;clear:both!important;">
  <tr>
    <td></td>
    <td style="max-width: 600px;margin: 0 auto;display: block;">
      <div>
        <table style="width:100%;">
          <tr>
            <td align="center">
              <p style="font-size: 14px;color: #666;">Don\'t like these annoying emails? <a href="#" style="color:#999;"><unsubscribe>Unsubscribe</unsubscribe></a>.</p>
            </td>
          </tr>
        </table>
      </div>			
    </td>
    <td></td>
  </tr>
</table>
</body>
</html>';
    $mail->send();
  }
}
?>