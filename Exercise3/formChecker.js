function validate() {
  var user, b, r, g, y;
  /* Variables */
  user = document.forms["blockForm"]["user"].value;

  b = document.forms["blockForm"]["blue"].value;
  r = document.forms["blockForm"]["red"].value;
  g = document.forms["blockForm"]["green"].value;
  y = document.forms["blockForm"]["yellow"].value;
  /* User Validation */
  if(validateEmail(user) == false) {
    alert("Invalid User Login");
    return false;
  }
  /* Box Validation */
  /* Blue */
  if(b < 0 || isNaN(b) || b == "") {
    alert("Invalid input for Blue Boxes");
    return false;
  }
  /* red */
  if(r < 0 || isNaN(r) || r == "") {
    alert("Invalid input for Red Boxes");
    return false;
  }
  /* Green */
  if(g < 0 || isNaN(g) || g == "") {
    alert("Invalid input for Green Boxes");
    return false;
  }
  /* Yellow */
  if(y < 0 || isNaN(y) || y == "") {
    alert("Invalid input for Yellow Boxes");
    return false;
  }
}
//Credit to https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript/1373724#1373724
function validateEmail(email) {
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}
