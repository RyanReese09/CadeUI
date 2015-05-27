<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/bootstrap.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(true)
  {
    $email=$_POST["loginEmail"];
    setcookie("test",$email,50000,"/");
    $password=filter_input(INPUT_POST,"password");
    $remember=filter_input(INPUT_POST,"remember");
    $formData=new UserServices($pdo);
    $isValid=$formData->checkCredentials($email,$password,$remember);
  }
  $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
  if($isAjax)
  {
    $result=["result" => $isValid];
    header("Content-Type: application/json");
    exit(json_encode($result));
  }
  
  if($isValid[0])
    header("Location: http://www.codefundamentals.com/cadeui/dashboard");
  else
    header("Location: http://www.codefundamentals.com/cadeui/login?error=$isValid[1]");
}
?>