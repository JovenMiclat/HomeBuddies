$(document).ready(function () {
  $("#payment_success").modal("show");
  $("#payment_success").on("shown.bs.modal", function () {
    var seconds = 6;
    var url = "/pro";
    function redirect() {
      if (seconds <= 0) {
        // redirect to new url after counter  down.
        window.location = url;
      } else {
        seconds--;
        document.getElementById("pageInfo").innerHTML =
          "You will be redirected after " + seconds + " seconds.";
      }
    }
    setInterval(redirect, 1000);
  });
});
