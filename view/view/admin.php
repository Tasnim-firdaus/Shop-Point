<!DOCTYPE html>
<html>
<body>

<h1>Admin Registration Form</h1>

<form action="adminlog.php" method="post">
  
<fieldset>
  <legend>Account Information</legend>
  
  <table>

    <tr>
      <td><label for="user_name">Username:</label></td>
      <td><input type="text" id="user_name" name="user_name"></td>
    </tr>

    <tr>
  <td><label for="email">Email Address:</label></td>
  <td><input type="email" id="email" name="email"></td>
</tr>

    <tr>
    <td><label for="password">Password:</label></td>
    <td><input type="password" id="password" name="password"></td>
    <tr>

    
      <tr>
        <td><label for="confirm_password">Confirm Password:</label></td>
        <td><input type="password" id="confirm_password" name="confirm_password"></td>
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
      <td><label for="phone">Phone Number:</label>
      <td><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> </td>
</tr>

<tr>
<td><label for="Profile_Pic">Upload Photo:</label></td>
<td><input type="file" id="Profile_Pic" name="Profile_Pic"></td>

</tr>

</table>
</fieldset>


<fieldset>
  <legend>Business & Verification Information</legend>
  <table>
  
  <tr>
      <td><label for="National_ID">National ID Number:</label></td>
      <td><input type="text" id="National_ID" name="National_ID"></td>
    </tr>

    <tr>
<td><label for="Upload_NID">Upload NID Card:</label></td>
<td><input type="file" id="Upload_NID" name="Profile_Pic"></td>
</tr>

<tr>
      <td><label for="Trade_License">Trade License Number:</label></td>
      <td><input type="text" id="Trade_License" name="Trade_License"></td>
    </tr>

    <tr>
<td><label for="Upload_TLC">Upload Trade License Document:</label></td>
<td><input type="file" id="Upload_TLC" name="Upload_TLC"></td>
</tr>

</table>
</fieldset>


<fieldset>
  <legend>Platform Preferences</legend>
  <label>Select Available Work Days:</label>
  <table>
  
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



  
    <td><input type="checkbox" id="monday" name="monday" value="Monday"></td>
    <td><label for="monday">Monday</label></td>
  </tr>
  </table>

<table>
  <tr>
    <td><label for="appt">Select a time:</label></td>
    <td><input type="time" id="appt" name="appt"></td>
  </tr>



  </table>
</fieldset>


<input type ="submit" value="Submit">

</form>

</body>
</html>
