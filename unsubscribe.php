<?php
$page="Unsubscribe";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
$unsubscribe=new Subscribers($pdo);
if($unsubscribe->unsubscribe($_GET["email"]))
{
  echo "yay, unsubscribe";
  echo $unsubscriberEmail;
}
else
  echo "user not found or corrupted email? returned false";
?>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>