<?php
include '../model/Admin_userdata.php';
include '../model/userdb.php';

$conn = createUserConn();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ✅ Add New User (no hashing)
    if (isset($_POST['addUser'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $birthday = $_POST['birthday'];
        $gend = $_POST['gend'];
        $phn = $_POST['phn'];
        $addr = $_POST['addr'];
        $dis = $_POST['dis'];
        $pass = $_POST['pass']; // store as plain text

        addUser($conn, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $pass);
        header("Location: ../view/user_dashboard.php");
        exit();
    }

    // ✅ Update User (password optional, no hashing)
    if (isset($_POST['updateUser'])) {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $birthday = $_POST['birthday'];
        $gend = $_POST['gend'];
        $phn = $_POST['phn'];
        $addr = $_POST['addr'];
        $dis = $_POST['dis'];

        if (!empty($_POST['pass'])) {
            $pass = $_POST['pass']; // new plain password
        } else {
            // keep old password
            $userData = getUserById($conn, $id);
            $row = mysqli_fetch_assoc($userData);
            $pass = $row['pass'];
        }

        updateUser($conn, $id, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $pass);
        header("Location: ../view/user_dashboard.php");
        exit();
    }

    // ✅ Delete User
    if (isset($_POST['deleteUser'])) {
        $id = $_POST['id'];
        deleteUser($conn, $id);
        header("Location: ../view/user_dashboard.php");
        exit();
    }
}

mysqli_close($conn);
?>
