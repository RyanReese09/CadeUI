<?php
$page="Unsubscribe";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
$unsubscriberEmail=filter_var($_GET["email"],FILTER_VALIDATE_EMAIL);
if($unsubscriberEmail)
{
  $unsubscribe=new Subscribers($pdo);
  if($unsubscribe->unsubscribe($unsubscriberEmail))
  {
    echo "yay, unsubscribe";
    echo $unsubscriberEmail;
  }
  else
    echo "user not found or corrupted email? returned false";
}
else
  echo "Bad e-mail";
?>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>