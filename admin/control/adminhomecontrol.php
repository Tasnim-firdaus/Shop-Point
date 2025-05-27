<?php
session_start();

if (!isset($_SESSION['admin_email']) || !isset($_SESSION['admin_name'])) {
    header("Location: ../view/adminlogin.php");
    exit();
}

// ✅ Welcome message with cookie
if (!isset($_COOKIE['welcomeName'])) {
    setcookie("welcomeName", $_SESSION['admin_name'], time() + 3600, "/"); // 1 hour
    $welcomeMessage = "Welcome, " . $_SESSION['admin_name'] . "!";
} else {
    $welcomeMessage = "Welcome back, " . $_COOKIE['welcomeName'] . "!";
}

// ✅ Load admin picture from database
include '../model/admindata.php';
$conn = createConnObj();
$email = $_SESSION['admin_email'];

$result = mysqli_query($conn, "SELECT picture FROM admin WHERE email='$email'");
$row = mysqli_fetch_assoc($result);
$pic = $row['picture'];

mysqli_close($conn);
?>
