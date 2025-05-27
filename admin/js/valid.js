function validateForm() {
   
   let username = document.getElementById("user_name").value;
 let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
 let confirmPassword = document.getElementById("confirm_password").value;       
    let phone = document.getElementById("phone").value;
 let nid = document.getElementById("National_ID").value;
 
   
 document.getElementById("userNameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
 document.getElementById("passwordError").innerHTML = "";
  document.getElementById("phoneError").innerHTML = "";
    document.getElementById("nidError").innerHTML = "";
 
   
if(username===""){
 document.getElementById("userNameError").innerHTML = "Username is required";
     return false;
    }
 
 let namePattern = /^([A-Z][a-z]+)(\s[A-Z][a-z]+)*$/
if (!namePattern.test(username)) {
alert("Each word must start with a capital letter followed by lowercase letters");
 document.getElementById("userNameError").innerHTML = "Use proper capitalization";
  return false;
}
 
 
   
let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Invalid email format");
      document.getElementById("emailError").innerHTML = "Invalid email format";
     return false;
    }
 
   
  if (password.length < 6) {
   alert("Password must be at least 6 characters");
   document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
     return false;
    }
  if (password !== confirmPassword) {
     alert("Passwords do not match");
      document.getElementById("passwordError").innerHTML = "Passwords do not match";
      return false;
    }
 
   
   let phonePattern = /^\d{11}$/;
    if (!phonePattern.test(phone)) {
      alert("Phone number must be exactly 11 digits");
      document.getElementById("phoneError").innerHTML = "Phone number must be exactly 11 digits";
      return false;
    }
 
   
    let nidPattern = /^\d{10,17}$/;
    if (!nidPattern.test(nid)) {
      alert("Invalid NID number");
     document.getElementById("nidError").innerHTML = "NID must be 10-17 digits";
     return false;
    }
 
   
 return true;
  }
 