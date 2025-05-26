<?php include '../../control/editcontrol.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Account</title>
</head>
<body>

<h1>Edit Your Account</h1>

<?php if ($userdata) { ?>
<form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $userdata['id']; ?>">
    <input type="hidden" name="old_photo" value="<?php echo $userdata['photo']; ?>">

    <label>Phone:</label>
    <input type="text" name="phn" value="<?php echo $userdata['phn']; ?>"><br><br>

    <label>First Name:</label>
    <input type="text" name="fname" value="<?php echo $userdata['fname']; ?>"><br><br>

    <label>Last Name:</label>
    <input type="text" name="lname" value="<?php echo $userdata['lname']; ?>"><br><br>

    <label>Birthday:</label>
    <input type="date" name="birthday" value="<?php echo $userdata['birthday']; ?>"><br><br>

    <label>Gender:</label>
    <input type="radio" name="gend" value="male" <?php if ($userdata['gend'] == 'male') echo "checked"; ?>> Male
    <input type="radio" name="gend" value="female" <?php if ($userdata['gend'] == 'female') echo "checked"; ?>> Female<br><br>

    <label>Address:</label><br>
    <textarea name="addr"><?php echo $userdata['addr']; ?></textarea><br><br>

    <label>District:</label>
    <input type="text" name="dis" value="<?php echo $userdata['dis']; ?>"><br><br>

    <label>Current Profile Photo:</label><br>
    <img src="../../uploads/<?php echo $userdata['photo']; ?>" width="120" height="120"><br><br>

    <label>Upload New Photo:</label>
    <input type="file" name="photo"><br><br>

    <input type="submit" name="update" value="Update">
</form>

<?php } else { ?>
    <p>User not found or ID missing.</p>
<?php } ?>

</body>
</html>
