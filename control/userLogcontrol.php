<?php
session_start();
include '../../model/userdata.php';

$phoneError = $passwordError = $loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $isValid = true;

    if (empty($phone)) {
        $phoneError = "Phone is required.";
        $isValid = false;
    }

    if (empty($password)) {
        $passwordError = "Password is required.";
        $isValid = false;
    }

    if ($isValid) {
        $conn = createConnObj();
        $result = checkLogin($conn, $phone, $password);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            setcookie("welcomeName", $row['fname'], time() + 3600, "/");
            setcookie("visited", "yes", time() + (86400 * 30), "/");
            header("Location: ../view/home.php");
            exit();
        } else {
            $loginError = "Invalid phone or password.";
        }

        closeConn($conn);
    }
}
?>
