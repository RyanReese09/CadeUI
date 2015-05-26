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
          alert("fuckyeah");
          console.log("fuckyeah");
          $(".overlay .loading-bar").remove();
          $(".overlay").css("z-index","9997");
          $("#subEmail, #subSubmit").prop("disabled", false);
        }
        else
          console.log("didn't work");
      }
    });
  }
  return false;
});