<?php
$page="Login";
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
{
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
}
?>
<div class="login-wrapper">
  <form method="post" action="/cadeui/system/includes/process-login" id="login" name="login">
    <fieldset>
      <?php
      if(isset($_GET["error"]) && $_GET["error"]==="userpass")
        echo "<span id=\"userpass-error\" class=\"error\">Error: Your username or password is incorrect. Please try again.</span>\n";
      else if(isset($_GET["error"]) && $_GET["error"]==="attempts")
        echo "<span id=\"attempts-error\" class=\"error\">Error: You have exceeded the maximum number of attempts. Please try again later.</span>\n";
      ?>
<label for="email">Username</label>
      <input type="email" class="envelope" placeholder="Username" id="email" name="email">
      <div class="password-holder">
        <label for="password">Password</label>
        <span class="showHide showPW remove">Show</span>
      </div>
      <input type="password" class="lock" placeholder="Password" id="password" name="password">
      <div class="submit-holder">
        <div class="rem-pw-holder">
          <label class="remember-me"><input type="checkbox" name="remember" id="remember" value="yes">Remember Me</label>
          <a href="#" class="forgotpw">I forgot my password...</a>
        </div>
        <input type="submit" id="submit" value="Login">
      </div>
     </fieldset>
  </form>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
{
?>
</body>
</html>
<?php
}
?>