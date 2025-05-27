<?php include '../control/adminhomecontrol.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Home</title>
</head>
<body>

  <h2><?php echo $welcomeMessage; ?></h2>

  <!-- ✅ Admin profile picture display -->
  <?php if (!empty($pic)): ?>
    <img src="../uploads/<?php echo $pic; ?>" width="150" height="150" alt="Admin Picture">
  <?php else: ?>
    <p>No profile picture found.</p>
  <?php endif; ?>

  <h3>Options:</h3>
  <ul>
    <li><a href="user_dashboard.php">User Details</a></li>
    <li><a href="adminlogout.php">Logout</a></li>
  </ul>

</body>
</html>
