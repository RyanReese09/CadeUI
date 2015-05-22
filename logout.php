<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/bootstrap.php");

$logout=new UserServices($pdo);
$logout->newAuthKey($_SESSION["userID"]);

setcookie("rememberMe", "", -1, "/");
session_unset();
session_destroy();
header("Location: http://www.codefundamentals.com/cadeui/login");
?>