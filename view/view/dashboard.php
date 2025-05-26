<?php 
session_start();
include '../../control/dashboardcontrol.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>

<h1>Welcome to your Dashboard, <?php echo $_SESSION['fname']; ?>!</h1>

<?php if ($userdata) { ?>

    <?php 
    $photoPath = "../../uploads/" . $userdata['photo']; 
    if (!empty($userdata['photo']) && file_exists($photoPath)) {
        echo "<img src='$photoPath' width='150' height='150' alt='Profile Photo'><br><br>";
    } else {
        echo "<p style='color:red;'>No profile photo found.</p>";
    }
    ?>

    <h3>Your Information</h3>
    <table border="1">
        <tr><td>First Name:</td><td><?php echo $userdata['fname']; ?></td></tr>
        <tr><td>Last Name:</td><td><?php echo $userdata['lname']; ?></td></tr>
        <tr><td>Birthday:</td><td><?php echo $userdata['birthday']; ?></td></tr>
        <tr><td>Gender:</td><td><?php echo $userdata['gend']; ?></td></tr>
        <tr><td>Phone:</td><td><?php echo $userdata['phn']; ?></td></tr>
        <tr><td>Address:</td><td><?php echo $userdata['addr']; ?></td></tr>
        <tr><td>District:</td><td><?php echo $userdata['dis']; ?></td></tr>
    </table>

    <h3>Account Options</h3>
    <ul>
        <li><a href="edit.php?id=<?php echo $userdata['id']; ?>">Edit Account</a></li>
        <li><a href="delete.php?id=<?php echo $userdata['id']; ?>">Delete Account</a></li>
    </ul>

<?php } else { ?>
    <p>No user found or ID missing.</p>
<?php } ?>

</body>
</html>
