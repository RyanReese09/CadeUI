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