<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/bootstrap.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email=filter_input(INPUT_POST,"email");
  $password=filter_input(INPUT_POST,"password");
  $remember=filter_input(INPUT_POST,"remember");
  $login=new UserServices($pdo);

  $isValidLogin=$login->checkCredentials($email,$password,$remember);

  $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
  if($isAjax)
  {
    $result=["result" => $isValidLogin];
    header("Content-Type: application/json");
    exit(json_encode($result));
  }
  if($isValidLogin[0])
    header("Location: http://www.codefundamentals.com/cadeui/dashboard");
  else
    header("Location: http://www.codefundamentals.com/cadeui/login?error=$isValidLogin[1]");
}
else
    header("Location: http://www.codefundamentals.com/cadeui/login");
?>
