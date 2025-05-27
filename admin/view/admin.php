<!DOCTYPE html>
<?php
include '../control/admincontrollog.php';
?>
<html>
<head>
  <title>Admin Registration</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<h1>Admin Registration Form</h1>

<form action="" method="post" enctype="multipart/form-data">

<fieldset>
  <legend>Account Information</legend>
  <table>
    <tr>
      <td><label for="user_name">Username:</label></td>
      <td>
        <input type="text" id="user_name" name="user_name"> 
        <span id="userNameError" style="color:red;"><?php echo $user_nameError; ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="email">Email Address:</label></td>
      <td>
        <input type="email" id="email" name="email">
        <span id="emailError" style="color:red;"><?php echo $emailError; ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="password">Password:</label></td>
      <td>
        <input type="password" id="password" name="password">
        <span id="passwordError" style="color:red;"><?php echo $passwordError; ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="confirm_password">Confirm Password:</label></td>
      <td>
        <input type="password" id="confirm_password" name="confirm_password">
        <span id="confirmPasswordError" style="color:red;"><?php echo $confirmPasswordError; ?></span>
      </td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Personal Information</legend>
  <table>
    <tr>
      <td><label for="Address">Current Address:</label></td>
      <td><input type="text" id="Address" name="Address"></td>
    </tr>

    <tr>
      <td><label for="Date_of_Birth">Date of Birth:</label></td>
      <td><input type="date" id="Date_of_Birth" name="Date_of_Birth"></td>
    </tr>

    <tr>
      <td><label for="gender">Gender:</label></td>
      <td>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </td>
    </tr>

    <tr>
      <td><label for="phone">Phone Number:</label></td>
      <td>
        <input type="tel" id="phone" name="phone">
        <span id="phoneError" style="color:red;"><?php echo $phoneError; ?></span>
      </td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Business & Verification Information</legend>
  <table>
    <tr>
      <td><label for="National_ID">National ID Number:</label></td>
      <td>
        <input type="text" id="National_ID" name="National_ID">
        <span id="nidError" style="color:red;"><?php echo $nidError; ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="Trade_License">Trade License Number:</label></td>
      <td><input type="text" id="Trade_License" name="Trade_License"></td>
    </tr>

    <tr>
      <td><label for="profile_pic">Upload Profile Picture:</label></td>
      <td><input type="file" name="profile_pic" required></td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Platform Preferences</legend>
  <label>Select Available Work Days:</label>
  <table>
    <tr>
      <td><input type="checkbox" id="monday" name="monday" value="Monday"></td>
      <td><label for="monday">Monday</label></td>
    </tr>
    <tr>
      <td><input type="checkbox" id="tuesday" name="tuesday" value="Tuesday"></td>
      <td><label for="tuesday">Tuesday</label></td>
    </tr>
    <tr>
      <td><input type="checkbox" id="wednesday" name="wednesday" value="Wednesday"></td>
      <td><label for="wednesday">Wednesday</label></td>
    </tr>
    <tr>
      <td><input type="checkbox" id="thursday" name="thursday" value="Thursday"></td>
      <td><label for="thursday">Thursday</label></td>
    </tr>
    <tr>
      <td><input type="checkbox" id="friday" name="friday" value="Friday"></td>
      <td><label for="friday">Friday</label></td>
    </tr>
    <tr>
      <td><input type="checkbox" id="saturday" name="saturday" value="Saturday"></td>
      <td><label for="saturday">Saturday</label></td>
    </tr>
    <tr>
      <td><input type="checkbox" id="sunday" name="sunday" value="Sunday"></td>
      <td><label for="sunday">Sunday</label></td>
    </tr>
  </table>

  <table>
    <tr>
      <td><label for="appt">Select a time:</label></td>
      <td><input type="time" id="appt" name="appt"></td>
    </tr>
  </table>
</fieldset>

<input type="submit" name="Submit" value="Submit">

</form>

</body>
</html>
