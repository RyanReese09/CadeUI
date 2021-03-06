<?php
$page="Homepage";
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/header.php");
?>
<body>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/page-header.php");
?>
<div class="banner-why" role="contentinfo" aria-labelledby="whatiscadeui" aria-describedby="description">
  <div class="banner-inner">
    <div class="banner-text">
      <h1 id="whatiscadeui">What is CadeUI?</h1>
      <h2 id="description">CadeUI is a coding "sandbox" which also doubles as a CMS, allowing you to create fully fledged websites</h2>
      <a href="/cadeui/dashboard" class="new-cade-button" title="New Cade" role="button" tabindex="12">New Cade</a>
    </div>
    <img src="/cadeui/system/images/code-languages.png" alt="HTML, CSS, and Javascript" width="596" height="350">
  </div>
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
<div class="features-wrapper" id="features" data-scroll-index="2" role="contentinfo" aria-labelledby="features-title">
  <h1 id="features-title">Why use CadeUI?</h1>
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
      <p>We are dedicated to providing the best experience for you. Have a feature request? <a href="/cadeui/contact" title="Contact CadeUI" tabindex="13">Let us know!</a></p>
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
<div class="testimonials" id="testimonials" data-scroll-index="3" role="contentinfo" aria-labelledby="testimonials-title">
  <div class="testimonials-inner">
    <h1 id="testimonials-title">Developers Love Us</h1>
    <blockquote class="scrollflow -slide-right -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
    <blockquote class="scrollflow -pop -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
    <blockquote class="scrollflow -slide-left -opacity" cite="">why the fug are you quoting me? Get the fug out of my face. No don't make that a quote. Stupid nerd</blockquote>
  </div>
</div>
<div class="mailing-list" data-scroll-index="4" id="newsletter" role="contentinfo" aria-labelledby="newslettersignup">
  <h1 id="newslettersignup">Newsletter Signup</h1>
  <?php
  if(!isset($_GET["result"]))
  {
  ?>
  <form action="/cadeui/system/includes/process-home.php" method="post" id="subscribers">
    <label><input type="email" placeholder="E-mail" name="subEmail" id="subEmail" tabindex="14" aria-required="true" aria-describedby="newslettersignup">
    <?php
      if(isset($_GET["error"]) && $_GET["error"]==="format")
        echo "<span class=\"error\">Error: Please enter a valid e-mail address</span>\n";
      else if(isset($_GET["error"]) && $_GET["error"]==="doubleentry")
        echo "<span id=\"attempts-error\" class=\"error\">Error: You are already subscribed</span>\n";
    ?>
    </label>
    <label><input type="submit" value="Submit" name="subscribe" id="subSubmit" tabindex="15"></label>
  </form>
  <?php
  }
  else if($_GET["result"]==="subscribed" && isset($_GET["email"]))
    echo "<p class=\"success-message\" style=\"display:block\"><span>Success:</span> You have been successfully subscribed to the CadeUI newsletter. Please check your e-mail, <strong>".$_GET['email']."</strong>, for the confirmation code.</p>";
  ?>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/footer.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/cadeui/system/includes/js-files.php");
?>
</body>
</html>