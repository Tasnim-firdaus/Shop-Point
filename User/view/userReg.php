<?php
include '../control/userRegcontrol.php';
?>
<html>
<head>
    <title>Trendy Meow</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>  

<div class="header">
    User Registration
</div>
<p><?php echo $photoError; ?></p>
<p><?php echo $fnameError; ?></p>
<p><?php echo $lnameError; ?></p>
<p><?php echo $birthdayError; ?></p>
<p><?php echo $gendError; ?></p>
<p><?php echo $phnError; ?></p>
<p><?php echo $addError; ?></p>
<p><?php echo $passError; ?></p>
<p><?php echo $CpassError; ?></p>

<form action="" method="post" enctype="multipart/form-data">

    <fieldset>
        <legend>Personal Information</legend>
        <table>
            <tr>
                <td><label for="fname">First Name:</label></td>
                <td><input type="text" id="fname" name="fname"></td>
            </tr>
            <tr>              
                <td><label for="lname">Last Name:</label></td>
                <td><input type="text" id="lname" name="lname"></td>
            </tr>
            <tr>
                <td><label for="birthday">Date Of Birth:</label></td>
                <td><input type="date" id="birthday" name="birthday"></td>
            </tr>
            <tr class="gender-row">
                <td><label for="gend">Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="gend" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gend" value="female">
                    <label for="female">Female</label>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Contact Details</legend>
        <table>
            <tr>
                <td><label for="phn">Phone Number:</label></td>
                <td><input type="tel" id="phn" name="phn"></td>
            </tr>
            <tr>
                <td><label for="add">Address:</label></td>
                <td><textarea name="add" id="add"></textarea></td>
            </tr>
            <tr>
                <td><label for="dis">District:</label></td>
                <td>
                    <select name="dis" id="dis">
                        <option>Dhaka</option>
                        <option>Narsingdi</option>
                        <option>Gazipur</option>
                        <option>Narayanganj</option>
                    </select>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Account Security</legend>
        <table>
            <tr>
                <td><label for="pass">Password:</label></td>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td><label for="Cpass">Confirm Password:</label></td>
                <td><input type="password" name="Cpass" id="Cpass"></td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Upload Profile Picture</legend>
        <table>
            <tr>
                <td><label for="photo">Select File:</label></td>
                <td><input type="file" name="photo" id="photo"></td>
            </tr>
        </table>
    </fieldset>

    <div class="button-row">
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" value="Reset">
    </div>

</form>

</body>
</html>
