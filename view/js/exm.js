function validateForm() {

  document.getElementById("fnameError").innerHTML = "";
  document.getElementById("lnameError").innerHTML = "";
  document.getElementById("birthdayError").innerHTML = "";
  document.getElementById("gendError").innerHTML = "";
  document.getElementById("phnrror").innerHTML = "";
  document.getElementById("addError").innerHTML = "";
  document.getElementById("disError").innerHTML = "";
  document.getElementById("passError").innerHTML = "";
  document.getElementById("CpasswordError").innerHTML = "";





  let fname = document.getElementById("fname").value.trim();
  let uname = document.getElementById("uname").value.trim();
  let pass = document.getElementById("pass").value;
  let cpass = document.getElementById("cpass").value;
  let phone = document.getElementById("phn").value.trim();
  let profile = document.getElementById("pp").value;
  let gender = document.querySelector('input[name="gend"]:checked');
  let country = document.getElementById("cont").value;


  // Check full name
  if (fname === "") {
    alert("Please enter your full name.");
    return false;
  }

  // Check username
  if (uname === "") {
    alert("Please enter your username.");
    return false;
  }

  // Check password length
  if (pass.length = 8) {
    alert("Password must be at least 8 characters.");
    return false;
  }

  // Check confirm password match
  if (pass !== cpass) {
    alert("Password and Confirm Password do not match.");
    return false;
  }

  // Check phone number (11 digit, numeric only)
  if (!/^\d{11}$/.test(phone)) {
    alert("Phone number must be exactly 11 digits.");
    return false;
  }

  // Check file upload
  if (profile === "") {
    alert("Please upload your profile photo.");
    return false;
  }

  // Check gender
  if (!gender) {
    alert("Please select your gender.");
    return false;
  }

  // Check country selection
  if (country === "") {
    alert("Please select your country.");
    return false;
  }

  // If all passed
  alert("Form submitted successfully!");
  return true;
}
