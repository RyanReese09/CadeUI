$("#login").validate({
  errorClass: "error",
  errorElement: "span",
  rules: {
    password: {
      required: true,
      minlength: 5
    },
    email: {
      required: true,
      email: true
    }
  },
  messages: {
    password: {
      required: "Please provide a password",
      minlength: "Your password must be at least 5 characters long"
    },
    email: "Please enter a valid email address"
  }
});
$(".showHide").click(function() {
  $(".showHide").toggleClass("showPW").toggleClass("hidePW");
  if($(".showHide").text()==="Show")
  {
    $(".showHide").text("Hide");
    $(".lock").prop("type","text");
  }
  else
  {
    $(".showHide").text("Show");
    $(".lock").prop("type","password");
  }
});
$(".showHide").removeClass("remove");
$("#login").submit(function(event) {
  event.preventDefault();
  if($("#login").valid())
  {
    $("body").append("<div class=\"overlay\"><div class=\"loading-bar\"><span></span><span></span><span></span><span></span><span></span></div></div>");
    $(".overlay").css("z-index","9999");
    var user=$("#email").val();
    var pass=$("#password").val();
    if($("#remember").prop("checked"))
      var remember=true;
    else
      var remember=false;
    $("#submit, #email, #password").prop("disabled", true);
    $.ajax({
      type: "POST",
      data: {
        'email': user,
        'password':pass,
        'remember':remember
      },
      url: "/cadeui/system/includes/process-home",
      success: function(data) {
        data = JSON.parse(data);
        if(data.result[0])
          window.location.href="http://www.codefundamentals.com/cadeui/dashboard";
        else
        {
          $(".overlay .loading-bar").remove();
          $(".overlay").css("z-index","9997");
          $("#submit, #email, #password").prop("disabled", false);
          if(data.result[1]==="userpass")
          {
            $("<span id=\"userpass-error\" class=\"error\">Error: Your username or password is incorrect. Please try again.</span>").prependTo("fieldset");
          }
          else if(data.result[1]==="attempts")
          {
            $("<span id=\"attempts-error\" class=\"error\">Error: You have exceeded the maximum number of attempts. Please try again later.</span>").prependTo("fieldset");
          }
          $("#password, #email").removeClass("valid");
        }
      }
    });
  }
  return false;
});