<?php
$page="Homepage";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<header id="top" data-scroll-index="0" role="banner">
  <div class="header-inner clearfix">
    <a href="/cadeui/" class="logo" title="Home" tabindex="1"><img src="/cadeui/system/images/cadeui-logo.png" width="300" height="100" alt="CadeUI"></a>
    <?php
    if(isset($_SESSION["loggedin"]))
    {
    ?>
    <a href="/cadeui/logout" class="logout depressed-button" title="Logout" tabindex="2"><span>Logout</span></a>
    <?php
    }
    else
    {
    ?>
    <a href="/cadeui/register" class="register depressed-button" title="Register" role="button" tabindex="2"><span>Register</span></a>
    <a href="/cadeui/login" class="login depressed-button" title="Login" role="button" tabindex="3"><span>Login</span></a>
    <?php
    }
    ?>
  </div>
  <nav class="top-nav" role="navigation">
    <input type="checkbox" class="hamburger" id="hamburger">
    <label class="trigger" for="hamburger" tabindex="4"><span></span></label>
    <ul role="menu">
      <li><a href="#top" data-scroll-nav="0" title="Home" tabindex="5">Home</a></li>
      <li><a href="#getting-started" data-scroll-nav="1" title="Getting Started" tabindex="6">Get Started</a></li>
      <li><a href="#features" data-scroll-nav="2" title="CadeUI Features" tabindex="7">Features</a></li>
      <li><a href="#testimonials" data-scroll-nav="3" title="Testimonials" tabindex="8">Testimonials</a></li>
      <li><a href="#newsletter" data-scroll-nav="4" title="Newsletter Signup" tabindex="9">Newsletter</a></li>
    </ul>
  </nav>
</header>
<div class="banner-why" role="contentinfo" aria-labelledby="whatiscadeui" aria-describedby="description">
  <h1 id="whatiscadeui">What is CadeUI?</h1>
  <h2 id="description">CadeUI is a coding "sandbox" which also doubles as a CMS, allowing you to create fully fledged websites</h2>
  <a href="/cadeui/dashboard" class="new-cade-button" title="New Cade" role="button" tabindex="10"><span>New Cade</span></a>
</div>
<div class="getting-started -pop" id="getting-started" data-scroll-index="1" role="contentinfo" aria-labelledby="gettingstarted">
  <div class="gs-inner">
    <h1 id="gettingstarted">Getting started is easy...</h1>
    <p>For single sandbox instances, you can simply click the "New Cade" button and you'll be directed to begin. However, you might want to consider registering an account and making full use of what CadeUI has to offer.</p>
    <h2>Why should I register an account?</h2>
    <ul role="list">
      <li>Link Cades together to create fully fledged websites</li>
      <li>Give custom names to your Cades</li>
      <li>Your saved Cades will not be auto-deleted after 7 days</li>
      <li>Upload images, tied to your account, instead of relying on external sources like TinyPic</li>
      <li>Set privacy settings for your Cades - yes, you can make them private!</li>
      <li>Enable Collaboration-Mode where you can have yourself and other pre-approved members work together on a Cade</li>
    </ul>
  </div>
</div>
<div class="features-wrapper" id="features" data-scroll-index="2" role="contentinfo" aria-labelledby="features">
  <h1 id="features">Why use CadeUI?</h1>
  <div class="features-inner">
    <div class="features-columns" aria-labelledby="nosetup">
      <img src="/cadeui/system/images/advantage-nosetup.gif" width="125" height="125" alt="No Setup Required" class="scrollflow -pop -opacity">
      <h2 id="nosetup">No Setup Required</h2>
      <p>Our goal is to simplify your playground. Begin a fresh Cade in SECONDS!</p>
    </div>
    <div class="features-columns" aria-labelledby="easytouse">
      <img src="/cadeui/system/images/advantage-easy.gif" width="125" height="125" alt="As easy as ABC" class="scrollflow -pop -opacity">
      <h2 id="easytouse">Easy To Use</h2>
      <p>Coding has never been easier - see how it will look in the browser as you code!</p>
    </div>
    <div class="features-columns" aria-labelledby="freedomrings">
      <img src="/cadeui/system/images/advantage-freedom.gif" width="125" height="125" alt="Freedom" class="scrollflow -pop -opacity">
      <h2 id="freedomrings">Freedom Rings</h2>
      <p>There are almost no limits when it comes to Cade. Do as you wish!</p>
    </div>
    <div class="features-columns" aria-labelledby="featuresgalore">
      <img src="/cadeui/system/images/advantage-features.gif" width="125" height="125" alt="Many Features" class="scrollflow -pop -opacity">
      <h2 id="featuresgalore">Features-galore</h2>
      <p>We are dedicated to providing the best experience for you. Have a feature request? <a href="/cadeui/contact" title="Contact CadeUI" tabindex="11">Let us know!</a></p>
    </div>
    <div class="features-columns" aria-labelledby="dependability">
      <img src="/cadeui/system/images/advantage-dependable.gif" width="125" height="125" alt="Very Dependable" class="scrollflow -pop -opacity">
      <h2 id="dependability">Dependability</h2>
      <p>Need to get to your Cades? Not to worry; we want that just as much as you. We do our best to ensure that we never go down.</p>
    </div>
    <div class="features-columns" aria-labelledby="documentation">
      <img src="/cadeui/system/images/advantage-document.gif" width="125" height="125" alt="Great Documentation" class="scrollflow -pop -opacity">
      <h2 id="documentation">Documentation</h2>
      <p>Everyone has used an application where there was terrible documentation. That won't be the case with us; we understand that frustration!</p>
    </div>
  </div>
</div>
<div class="banner-slogan" role="contentinfo">
  <img src="/cadeui/system/images/cat-music-banner.png" alt="Code is like music to my ears" width="2000" height="500">
</div>
<div class="testimonials" id="testimonials" data-scroll-index="3" role="contentinfo" aria-labelledby="testimonials">
  <div class="testimonials-inner">
    <h1 id="testimonials">Developers Love Us</h1>
    <blockquote class="scrollflow -slide-right -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
    <blockquote class="scrollflow -pop -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
    <blockquote class="scrollflow -slide-left -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
  </div>
</div>
<div class="mailing-list" data-scroll-index="4" id="newsletter" role="contentinfo" aria-labelledby="newslettersignup">
  <h1 id="newslettersignup">Newsletter Signup</h1>
  <form action="#" method="post" id="subscribers">
    <label><input type="email" placeholder="E-mail" name="email" id="subEmail" tabindex="12" aria-required="true" aria-describedby="newslettersignup"></label>
    <label><input type="submit" value="Submit" name="submit" id="subSubmit" tabindex="13"></label>
  </form>
</div>
<footer role="contentinfo">
  <div class="footer-inner">
    <section class="brand">
      <img src="/cadeui/system/images/cadeui-logo.png" width="300" height="100" alt="CadeUI">
    </section>
    <section aria-labelledby="product">
      <h1 id="product">CadeUI</h1>
      <ul role="list">
        <li><a href="/cadeui/about" title="All about CadeUI" tabindex="14">About</a></li>
        <li><a href="/cadeui/feedback" title="Leave Feedback" tabindex="15">Feedback</a></li>
        <li><a href="/cadeui/sitemap" title="SiteMap" tabindex="16">Sitemap</a></li>
      </ul>
    </section>
    <section aria-labelledby="support">
      <h1 id="support">Support</h1>
      <ul role="list">
        <li><a href="/cadeui/documentation" title="CadeUI Dcumentation" tabindex="17">Docs</a></li>
        <li><a href="/cadeui/contact" title="Contact CadeUI" tabindex="18">Contact</a></li>
        <li><a href="/cadeui/tips" title="Helpful Tips" tabindex="19">Helpful Tips</a></li>
        <li><a href="/cadeui/faq" title="Frequently Asked Questions" tabindex="20">F.A.Q.</a></li>
      </ul>
    </section>
    <section aria-labelledby="misc">
      <h1 id="misc">Miscellaneous</h1>
      <ul role="list">
        <li><a href="/cadeui/press" title="Press Releases" tabindex="21">Press</a></li>
        <li><a href="/cadeui/terms" title="Terms and Conditions" tabindex="22">Terms</a></li>
        <li><a href="/cadeui/privacy" title="Privacy Policy" tabindex="23">Privacy</a></li>
        <li><a href="/cadeui/statistics" title="CadeUI Statistics" tabindex="24">Statistics</a></li>
      </ul>
    </section>
  </div>
</footer>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>