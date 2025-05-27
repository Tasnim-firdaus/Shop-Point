<?php include '../control/usercontrol.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
</head>
<body>

<h1>Add New User</h1>

<form method="post">
    <table>
        <tr>
            <td><label for="fname">First Name:</label></td>
            <td><input type="text" id="fname" name="fname" required></td>
        </tr>
        <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" id="lname" name="lname" required></td>
        </tr>
        <tr>
            <td><label for="birthday">Birthday:</label></td>
            <td><input type="date" id="birthday" name="birthday" required></td>
        </tr>
        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gend" value="male" required> Male
                <input type="radio" name="gend" value="female"> Female
            </td>
        </tr>
        <tr>
            <td><label for="phn">Phone:</label></td>
            <td><input type="text" id="phn" name="phn" required></td>
        </tr>
        <tr>
            <td><label for="addr">Address:</label></td>
            <td><input type="text" id="addr" name="addr" required></td>
        </tr>
        <tr>
            <td><label for="dis">District:</label></td>
            <td><input type="text" id="dis" name="dis" required></td>
        </tr>
        <tr>
            <td><label for="pass">Password:</label></td>
            <td><input type="password" id="pass" name="pass" required></td>
        </tr>
    </table>

    <br>
    <input type="submit" name="addUser" value="Add User">
</form>

</body>
</html>
