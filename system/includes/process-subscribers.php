<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/bootstrap.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email=filter_input(INPUT_POST,"email");
  $subscriber=new UserServices($pdo);

  $isValidEmail=$subscriber->newSubscriber($email);

  $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
  if($isAjax)
  {
    $result=["result" => $isValidEmail];
    header("Content-Type: application/json");
    exit(json_encode($result));
  }
  if($isValidEmail[0])
    header("Location: http://www.codefundamentals.com/cadeui/index#newsletter#newsletter?result=success");
  else
    header("Location: http://www.codefundamentals.com/cadeui/index#newsletter?error=$isValidEmail[1]");
}
else
    header("Location: http://www.codefundamentals.com/cadeui/index");
?>