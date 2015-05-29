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
$("#subscribers").submit(function(event) {
  event.preventDefault();
  if($("#subscribers").valid())
  {
    $("body").append("<div class=\"overlay\"><div class=\"loading-bar\"><span></span><span></span><span></span><span></span><span></span></div></div>");
    $(".overlay").css("z-index","9999");
    var email=$("#subEmail").val();
    $("#subEmail").prop("disabled", true);
    $.ajax({
      type: "POST",
      dataType: "text",
      data: {
        'subEmail': email
      },
      url: "/cadeui/system/includes/process-home",
      success: function(data) {
        data = JSON.parse(data);
        if(data.result[0])
        {
          $(".overlay").remove();
          $("#subscribers").fadeOut(1000);
          $("<p class=\"success-message\">Congrats</p>").appendTo("#newsletter").delay(1500).fadeIn(1000);
        }
        else
        {
          $(".overlay").remove();
          $("#subEmail").prop("disabled", false);
          if(data.result[1]==="doubleentry")
          {
            $("<span id=\"attempts-error\" class=\"error\">Error: You are already subscribed</span>").appendTo("#subscribers");
          }
          else if(data.result[1]==="format")
          {
            $("<span class=\"error\">Error: Please enter an e-mail address</span>").appendTo("#subscribers");
          }
          $("#subEmail").removeClass("valid");
        }
      }
    });
  }
  return false;
});