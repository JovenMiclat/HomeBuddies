var pword = document.getElementById("pw1");

var confirm_pword = document.getElementById("pw2");

function validatePassword() {
  if (pword.value != confirm_pword.value) {
    confirm_pword.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_pword.setCustomValidity("");
  }
}

pword.onchange = validatePassword;

confirm_pword.onkeyup = validatePassword;
