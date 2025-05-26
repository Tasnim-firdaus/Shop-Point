<?php
// If you're using session in dashboard, keep this
session_start();
session_unset();
session_destroy();

// Remove cookies
setcookie("welcomeName", "", time() - 3600, "/");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>

<h2>You are now logged out.</h2>

<a href="userlogin.php">Go to Login Page</a>

</body>
</html>
