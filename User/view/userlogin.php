<?php
include '../control/userLogcontrol.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<!-- Error messages at the top (same as registration style) -->
<p><?php echo $phoneError; ?></p>
<p><?php echo $passwordError; ?></p>
<p><?php echo $loginError; ?></p>

<div class="header">
    User Login
</div>

<form method="post">
    <table>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="tel" id="phone" name="phone"></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" id="password" name="password"></td>
        </tr>
        </table>
           <div class="button-row">
            <input type="submit" name="login" value="Login">
            </div>
        
    
</form>

</body>
</html>
