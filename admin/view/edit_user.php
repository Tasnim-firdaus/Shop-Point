<?php
include '../control/usercontrol.php';

$conn = createUserConn();

$id = $_GET['id']; // Get user ID from URL
$result = getUserById($conn, $id);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

    <table>
        <tr>
            <td><label for="fname">First Name:</label></td>
            <td><input type="text" id="fname" name="fname" value="<?php echo $user['fname']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" id="lname" name="lname" value="<?php echo $user['lname']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="birthday">Birthday:</label></td>
            <td><input type="date" id="birthday" name="birthday" value="<?php echo $user['birthday']; ?>" required></td>
        </tr>
        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gend" value="male" <?php if ($user['gend'] == 'male') echo 'checked'; ?>> Male
                <input type="radio" name="gend" value="female" <?php if ($user['gend'] == 'female') echo 'checked'; ?>> Female
            </td>
        </tr>
        <tr>
            <td><label for="phn">Phone:</label></td>
            <td><input type="text" id="phn" name="phn" value="<?php echo $user['phn']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="addr">Address:</label></td>
            <td><input type="text" id="addr" name="addr" value="<?php echo $user['addr']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="dis">District:</label></td>
            <td><input type="text" id="dis" name="dis" value="<?php echo $user['dis']; ?>" required></td>
        </tr>
        <tr>
            <td><label for="pass">New Password:</label></td>
            <td><input type="password" id="pass" name="pass"> (leave blank to keep old)</td>
        </tr>
    </table>

    <br>
    <input type="submit" name="updateUser" value="Update User">
</form>

</body>
</html>

<?php mysqli_close($conn); ?>
