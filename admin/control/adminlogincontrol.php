<?php
session_start();
include '../model/admindata.php';

$emailError = $passwordError = "";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Login'])) {

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    if (empty($emailError) && empty($passwordError)) {
        $conn = createConnObj();

        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // ✅ Clear old cookie first (forces fresh login experience)
            setcookie("welcomeName", "", time() - 3600, "/");

            // ✅ Set session
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_name'] = $row['user_name'];

            // ✅ Redirect to admin home page
            header("Location: ../view/adminhome.php");
            exit();

        } else {
            $passwordError = "Invalid email or password";
        }

        mysqli_close($conn);
    }
}
?>
