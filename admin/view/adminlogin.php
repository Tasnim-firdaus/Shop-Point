<?php include '../control/adminlogincontrol.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>

  <h1>Admin Login</h1>

  <form method="post">
    <table>
      <tr>
        <td><label for="email">Email:</label></td>
        <td>
          <input type="email" id="email" name="email" required>
          <span style="color:red;"><?php echo $emailError; ?></span>
        </td>
      </tr>

      <tr>
        <td><label for="password">Password:</label></td>
        <td>
          <input type="password" id="password" name="password" required>
          <span style="color:red;"><?php echo $passwordError; ?></span>
        </td>
      </tr>

      <tr>
        <td colspan="2" style="text-align:center;">
          <input type="submit" name="Login" value="Login">
        </td>
      </tr>
    </table>
  </form>

</body>
</html>
