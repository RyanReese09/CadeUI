$(".logout").click(function(event) {
  event.preventDefault();
  $("body").append("<div class=\"overlay\"><div class=\"loading-bar\"><span></span><span></span><span></span><span></span><span></span></div></div>");
  $.ajax({
    url: "/cadeui/logout",
    success: function(){
      window.location.href="http://www.codefundamentals.com/cadeui/index";
    }
  });
  return false;
});

$(".login").click(function(e){
  e.preventDefault();
  
  $('<div>').dialog({
    modal: true,
    draggable: false,
    title: "Login",
    show: {effect: 'slide', duration: 300},
    hide: {effect: 'fade', duration: 500},
    open: function () {
      $("body").append("<div class=\"overlay\"></div>");
      $(this).load("/cadeui/login.php");
    },
    close: function() {
      $(this).remove();
      $(".overlay").remove();
    },
    width: $(window).width()
  });
});

$(".top-nav ul li a").click(function(){
  setTimeout(function(){
    $(".hamburger").attr("checked", false);
  }, 300);
});
//Sticky menu. Non-hamburger menu
$(".top-nav").sticky({topSpacing:0});

var navH=-($(".top-nav").height());
$.scrollIt({
  topOffset: navH
});
$("#subscribers").validate({
  errorClass: "error",
  errorElement: "span",
  rules: {
    subEmail: {
      required: true,
      email: true
    }
  },
  messages: {
    subEmail: "Error: Please enter a valid e-mail address"
  }
});