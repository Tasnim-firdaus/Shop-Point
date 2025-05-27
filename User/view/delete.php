<?php
session_start();
include '../model/userdata.php';

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $conn = createConnObj();

    // Step 1: Get the photo filename from DB
    $result = selectUser($conn, $id);
    if ($row = mysqli_fetch_assoc($result)) {
        $photoFile = $row['photo'];
        $filePath = "../uploads/" . $photoFile;

        // Step 2: Delete the photo file
        if (file_exists($filePath)) {
            unlink($filePath); // delete the photo
        }
    }

    // Step 3: Delete the DB record
    if (deleteUser($conn, $id)) {
        session_unset();
        session_destroy();
        setcookie("rememberPhone", "", time() - 3600);
        header("Location: userlogin.php");
        exit();
    } else {
        echo "<p style='color:red;'>Failed to delete account: " . mysqli_error($conn) . "</p>";
    }

    closeConn($conn);
} else {
    echo "<p style='color:red;'>Invalid user session.</p>";
}
?>
