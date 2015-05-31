<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/bootstrap.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST["loginEmail"]))
  {
    $email=filter_input(INPUT_POST,"loginEmail");
    $password=filter_input(INPUT_POST,"password");
    $remember=filter_input(INPUT_POST,"remember");
    $formData=new UserServices($pdo);
    $isValid=$formData->checkCredentials($email,$password,$remember);
  }
  else if(isset($_POST["subEmail"]))
  {
    $email=filter_input(INPUT_POST,"subEmail");
    $formData=new Subscribers($pdo);
    $isValid=$formData->newSubscriber($email);
  }
  $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
  if($isAjax)
  {
    $result=["result" => $isValid];
    header("Content-Type: application/json");
    exit(json_encode($result));
  }
  
  if(isset($_POST["login"]))
  {
    if($isValid[0])
      header("Location: http://www.codefundamentals.com/cadeui/dashboard");
    else
      header("Location: http://www.codefundamentals.com/cadeui/login?error=$isValid[1]");
  }
  else if(isset($_POST["subscribe"]))
  {
    if($isValid[0])
      header("Location: http://www.codefundamentals.com/cadeui/index?result=subscribed&email=".$isValid[1]."#newsletter");
    else
      header("Location: http://www.codefundamentals.com/cadeui/index?error=$isValid[1]#newsletter");
  }
}
?>