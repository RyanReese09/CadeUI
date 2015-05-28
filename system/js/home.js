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