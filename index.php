<?php
//change
$page="Homepage";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>Test text
<header id="top" data-scroll-index="0">
  <div class="header-inner clearfix">
    <a href="/cadeui/" class="logo" title="Home"><img src="/cadeui/system/images/cadeui-logo.png" width="300" height="100" alt="CadeUI"></a>
    <a href="/cadeui/register" class="register" title="Register">Register</a>
    <a href="/cadeui/login" class="login" title="Login">Login</a>
  </div>
  <nav class="top-nav">
    <input type="checkbox" class="hamburger" id="hamburger">
    <label class="trigger" for="hamburger"><span></span></label>
    <ul>
      <li><a href="#top" data-scroll-nav="0" title="Home">Home</a></li>
      <li><a href="#getting-started" data-scroll-nav="1" title="Getting Started">Get Started</a></li>
      <li><a href="#features" data-scroll-nav="2" title="CadeUI Features">Features</a></li>
      <li><a href="#testimonials" data-scroll-nav="3" title="Testimonials">Testimonials</a></li>
      <li><a href="#newsletter" data-scroll-nav="4" title="Newsletter Signup">Newsletter</a></li>
    </ul>
  </nav>
</header>
<div class="banner-why">
  <h1>What is CadeUI?</h1>
  <h2>CadeUI is a coding "sandbox" which also doubles as a CMS, allowing you to create fully fledged websites</h2>
  <a href="#" class="new-cade" title="New Cade"><span>New Cade</span></a>
</div>
<div class="getting-started -pop" id="getting-started" data-scroll-index="1">
  <div class="gs-inner">
    <h1>Getting started is easy...</h1>
    <p>For single sandbox instances, you can simply click the "New Cade" button and you'll be directed to begin. However, you might want to consider registering an account and making full use of what CadeUI has to offer.</p>
    <h2>Why should I register an account?</h2>
    <ul>
      <li>Link Cades together to create fully fledged websites</li>
      <li>Give custom names to your Cades</li>
      <li>Your saved Cades will not be auto-deleted after 7 days</li>
      <li>Upload images, tied to your account, instead of relying on external sources like TinyPic</li>
      <li>Set privacy settings for your Cades - yes, you can make them private!</li>
      <li>Enable Collaboration-Mode where you can have yourself and other pre-approved members work together on a Cade</li>
    </ul>
  </div>
</div>
<div class="features-wrapper" id="features" data-scroll-index="2">
  <h1>Why use CadeUI?</h1>
  <div class="features-inner">
    <div class="features-columns">
      <img src="/cadeui/system/images/advantage-nosetup.gif" width="125" height="125" alt="No Setup Required" class="scrollflow -pop -opacity">
      <h2>No Setup Required</h2>
      <p>Our goal is to simplify your playground. Begin a fresh Cade in SECONDS!</p>
    </div>
    <div class="features-columns">
      <img src="/cadeui/system/images/advantage-easy.gif" width="125" height="125" alt="As easy as ABC" class="scrollflow -pop -opacity">
      <h2>Easy To Use</h2>
      <p>Coding has never been easier - see how it will look in the browser as you code!</p>
    </div>
    <div class="features-columns">
      <img src="/cadeui/system/images/advantage-freedom.gif" width="125" height="125" alt="Freedom" class="scrollflow -pop -opacity">
      <h2>Freedom Rings</h2>
      <p>There are almost no limits when it comes to Cade. Do as you wish!</p>
    </div>
    <div class="features-columns">
      <img src="/cadeui/system/images/advantage-features.gif" width="125" height="125" alt="Many Features" class="scrollflow -pop -opacity">
      <h2>Features-galore</h2>
      <p>We are dedicated to providing the best experience for you. Have a feature request? <a href="/cadeui/contact" title="Contact">Let us know!</a></p>
    </div>
    <div class="features-columns">
      <img src="/cadeui/system/images/advantage-dependable.gif" width="125" height="125" alt="Very Dependable" class="scrollflow -pop -opacity">
      <h2>Dependability</h2>
      <p>Need to get to your Cades? Not to worry; we want that just as much as you. We do our best to ensure that we never go down.</p>
    </div>
    <div class="features-columns">
      <img src="/cadeui/system/images/advantage-document.gif" width="125" height="125" alt="Great Documentation" class="scrollflow -pop -opacity">
      <h2>Documentation</h2>
      <p>Everyone has used an application where there was terrible documentation. That won't be the case with us; we understand that frustration!</p>
    </div>
  </div>
</div>
<div class="banner-slogan">
  <img src="/cadeui/system/images/cat-music-banner.png" alt="Code is like music to my ears" width="2000" height="500">
</div>
<div class="testimonials" id="testimonials" data-scroll-index="3">
  <div class="testimonials-inner">
    <h1>Developers Love Us</h1>
    <blockquote class="scrollflow -slide-right -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
    <blockquote class="scrollflow -pop -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
    <blockquote class="scrollflow -slide-left -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
  </div>
</div>
<div class="mailing-list" data-scroll-index="4" id="newsletter">
  <h1>Newsletter Signup</h1>
  <form action="#" method="post">
    <label><input type="email" placeholder="E-mail" name="email"></label>
    <label><input type="submit" value="Submit" name="submit"></label>
  </form>
</div>
<footer>
  <div class="footer-inner">
    <section class="brand">
      <img src="/cadeui/system/images/cadeui-logo.png" width="300" height="100" alt="CadeUI">
    </section>
    <section>
      <h1>CadeUI</h1>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="#">Sitemap</a></li>
      </ul>
    </section>
    <section>
      <h1>Support</h1>
      <ul>
        <li><a href="#">Docs</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Helpful Tips</a></li>
        <li><a href="#">F.A.Q.</a></li>
      </ul>
    </section>
    <section>
      <h1>Miscellaneous</h1>
      <ul>
        <li><a href="#">Press</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Statistics</a></li>
      </ul>
    </section>
  </div>
</footer>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>