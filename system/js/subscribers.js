$("#subscribers").validate({
  errorClass: "error",
  errorElement: "span",
  rules: {
    email: {
      required: true,
      email: true
    }
  },
  messages: {
    email: "Please enter a valid email address"
  }
});
$("#subscribers").submit(function(event) {
  event.preventDefault();
  if($("#subscribers").valid())
  {
    $("body").append("<div class=\"overlay\"><div class=\"loading-bar\"><span></span><span></span><span></span><span></span><span></span></div></div>");
    $(".overlay").css("z-index","9999");
    var email=$("#subEmail").val();
    $("#subEmail, #subSubmit").prop("disabled", true);
    $.ajax({
      type: "POST",
      dataType: "text",
      data: {
        'email': email
      },
      url: "/cadeui/system/includes/process-subscribers",
      success: function(data) {
        data = JSON.parse(data);
        if(data.result[0])
        {
          alert("fuckyeah");//all good
        }
        else
        {
          if(data.result[1]==="format")
          {
            alert("format");
          }
          else if(data.result[1]==="doubleentry")
          {
            alert("double");
          }
        }
        $("#subEmail, #subSubmit").prop("disabled", false);
        $(".overlay").remove();
      }
    });
  }
  return false;
});