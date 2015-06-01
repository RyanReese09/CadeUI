<?php
$page="Unsubscribe";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/page-header.php");

/*
$subscription=new Subscribers($pdo);
$unsubscribe=$subscription->unsubscribe($_GET["email"]);
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
*/
?>
<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/footer.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>