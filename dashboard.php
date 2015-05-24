<?php
$page="Dashboard";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
echo "Hello ".htmlspecialchars($_SESSION["firstname"])." ".htmlspecialchars($_SESSION["lastname"]);

echo "<br><br>Username is: ".htmlspecialchars($_SESSION["username"]);

echo "<br><br>ID is: ".htmlspecialchars($_SESSION["userID"]);

echo "<br><br>Your join date is: ".htmlspecialchars($_SESSION["joindate"]);

if(!empty($_COOKIE["rememberMe"]))
echo "<br><br>You chose us to remember you. How cute.";

?>
<br><br><a href="/cadeui/logout" title="Logout" class="logout">Logout</a>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>