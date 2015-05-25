<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/cadeui/system/includes/bootstrap.php");
if(!isset($_SESSION["loggedin"]))
{
  if(isset($_COOKIE["rememberMe"]))
  {
    $loginInstance=new UserServices($pdo);
    $dbAuthKey=$loginInstance->userCookies($_COOKIE["rememberMe"], "compare");
    if($dbAuthKey===$_COOKIE["rememberMe"])
    {
      $loginInstance->userCookies($dbAuthKey, "set");
      if($page==="Login")
      {
        header("Location: http://www.codefundamentals.com/cadeui/dashboard");
        exit();
      }
    }
    else
    {
      if($page==="Dashboard")
      {
        header("Location: http://www.codefundamentals.com/cadeui/index");
        exit();
      }
    }
  }
  else
  {
    if($page==="Dashboard")
    {
      header("Location: http://www.codefundamentals.com/cadeui/index");
      exit();
    }
  }
}
else
{
  if($page==="Login")
  {
    header("Location: http://www.codefundamentals.com/cadeui/index");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title><?php echo $page;?> - CadeUI</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta charset="UTF-8">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"  type="text/css">
<link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="/cadeui/system/css/resets.css" type="text/css" rel="stylesheet">
<link href="/cadeui/system/css/main.css" type="text/css" rel="stylesheet">
</head>
