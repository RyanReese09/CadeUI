$("#logout").click(function(event) {
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
    show: {effect: 'fade', duration: 1000},
    hide: {effect: 'fade', duration: 5000},
    open: function () {
      $(this).load("/cadeui/login.php");
    },
    width: "auto",
    maxWidth: 440
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