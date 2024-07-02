
function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var contact = document.getElementById("contact").value;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }

  if (email == "") {
    alert("Email must be filled out");
    return false;
  }

  if (contact == "") {
    alert("Contact number must be filled out");
    return false;
  }
}

