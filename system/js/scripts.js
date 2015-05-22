$("#logout").click(function(event) {
  event.preventDefault();
  $("body").append("<div class=\"overlay\"><div class=\"loading-bar\"><span></span><span></span><span></span><span></span><span></span></div></div>");
  $.ajax({
    url: "/cadeui/logout",
    success: function(){
      window.location.href="http://www.codefundamentals.com/cadeui/login";
    }
  });
  return false;
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