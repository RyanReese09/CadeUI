<?php
$page="Activate";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/page-header.php");
?>
<div class="content">
<?php
$id=isset($_GET["id"]) ? $_GET["id"] : null;

$activate=new Subscribers($pdo);
$activate=$activate->activate($id);
if($activate[0])
{
  echo "yay, activated";
  echo $id;
}
else
{
  if($activate[1]==="alreadyactivated")
    echo "this ID has already been activated";
  else if($activate[1]==="notfound")
    echo "email not in system. Not subscribed";
}
?>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/footer.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>