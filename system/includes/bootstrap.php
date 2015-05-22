<?php
spl_autoload_register(function($class)
{
  require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/classes/".$class.".class.php");
});
$pdo=new PDO("mysql:dbname=codefund_cadeui","codefund","password-edited-out");
?>
