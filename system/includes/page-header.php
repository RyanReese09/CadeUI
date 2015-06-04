<header id="top" data-scroll-index="0" role="banner">
  <div class="header-inner clearfix">
    <a href="/cadeui/" class="logo" title="Home" tabindex="1"><img src="/cadeui/system/images/cadeui-logo.png" width="300" height="100" alt="CadeUI"></a>
    <?php
    if($page!=="Homepage")
    {
    ?>
    <a href="/cadeui/dashboard" class="user-links" title="New Cade" tabindex="2">New Cade</a>
    <?php
    }
    if(isset($_SESSION["loggedin"]))
    {
    ?>
    <a href="/cadeui/logout" class="logout user-links" title="Logout" tabindex="3">Logout</a>
    <?php
    }
    else
    {
    ?>
    <a href="/cadeui/register" class="register user-links" title="Register" role="button" tabindex="4">Register</a> |
    <a href="/cadeui/login" class="login user-links" title="Login" role="button" tabindex="5">Login</a>
    <?php
    }
    ?>
  </div>
  <?php
  if($page==="Homepage")
  {
  ?>
  <nav class="top-nav" role="navigation">
    <input type="checkbox" class="hamburger" id="hamburger">
    <label class="trigger" for="hamburger" tabindex="6"><span></span></label>
    <ul role="menu">
      <li><a href="#top" data-scroll-nav="0" title="Home" tabindex="7">Home</a></li>
      <li><a href="#getting-started" data-scroll-nav="1" title="Getting Started" tabindex="8">Get Started</a></li>
      <li><a href="#features" data-scroll-nav="2" title="CadeUI Features" tabindex="9">Features</a></li>
      <li><a href="#testimonials" data-scroll-nav="3" title="Testimonials" tabindex="10">Testimonials</a></li>
      <li><a href="#newsletter" data-scroll-nav="4" title="Newsletter Signup" tabindex="11">Newsletter</a></li>
    </ul>
  </nav>
  <?php
  }
  ?>
</header>