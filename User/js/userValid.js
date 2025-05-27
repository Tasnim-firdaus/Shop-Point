function validateForm() { 
  document.getElementById("fnameError").innerHTML = "";
  document.getElementById("lnameError").innerHTML = "";
  document.getElementById("birthdayError").innerHTML = "";
  document.getElementById("gendError").innerHTML = "";
  document.getElementById("phnError").innerHTML = "";
  document.getElementById("addError").innerHTML = "";
  document.getElementById("disError").innerHTML = "";
  document.getElementById("passError").innerHTML = "";
  document.getElementById("CpassError").innerHTML = "";


  let fname = document.getElementById("fname").value.trim();
  let lname = document.getElementById("lname").value.trim();
  let birthday = document.getElementById("birthday").value.trim();
  let gendMale = document.getElementById("mal").checked;
  let gendFemale = document.getElementById("fmal").checked;
  let phn = document.getElementById("phn").value.trim();
  let add = document.getElementById("add").value.trim();
  let dis = document.getElementById("dis").value.trim();
  let pass = document.getElementById("pass").value.trim();
  let cpass = document.getElementById("Cpass").value.trim();

 
  if (fname === "") {
    document.getElementById("fnameError").innerHTML = "Gender is required";
    return false;
  }

     if (lname === "") {
    alert("Last name is required");
    return false;
  }

     if (birthday === "") {
    alert("Date of Birth is required");
    return false;
  }
        if (!gendMale && !gendFemale) {
    document.getElementById("gendError").innerHTML = "Gender is required";
    return false;
  }
  
    if (phn === "") {
  document.getElementById("phnError").innerHTML = "Phone number is required";
  return false;
} 

 else if(!/^\d{11}$/.test(phn)) {
  document.getElementById("phnError").innerHTML = "Phone number must be 11 digits";
  return false;
}
  if (add === "") {
    document.getElementById("addError").innerHTML = "Address is required";
    return false;
  }

  if (dis === "") {
    document.getElementById("disError").innerHTML = "District is required";
    return false;
  }

  if (pass === "") {
    document.getElementById("passError").innerHTML = "Password is required";
    return false;
 }
 
 else if (pass.length < 8) {
    document.getElementById("passError").innerHTML = "Password must be at least 8 characters";
    return false;
}
  if (cpass === "") {
    document.getElementById("CpassError").innerHTML = "Confirm Password is required";
    return false;
  }
  
  if (pass !== cpass) {
    document.getElementById("CpassError").innerHTML = "Passwords do not match";
    return false;
  }

  return true;
}
