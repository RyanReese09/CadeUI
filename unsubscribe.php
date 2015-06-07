<?php
$page="Unsubscribe";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/page-header.php");
?>
<div class="content">
<?php
$email=isset($_GET["email"]) ? $_GET["email"] : null;

$subscription=new Subscribers($pdo);
$unsubscribe=$subscription->unsubscribe($email);
if($unsubscribe[0])
{
  echo "yay, unsubscribe";
  echo $unsubscriberEmail;
}
else
{
  if($unsubscribe[1]==="format")
    echo "corrupt email format";
  else if($unsubscribe[1]==="notfound")
    echo "email not in system";
}
?>
</div>
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/footer.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>