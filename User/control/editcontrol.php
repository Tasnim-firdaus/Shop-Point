<?php
session_start();
include '../model/userdata.php';

$userdata = null;

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    $conn = createConnObj();
    $result = selectUser($conn, $id);

    if (mysqli_num_rows($result) == 1) {
        $userdata = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['update'])) {
        $phn = $_POST['phn'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $birthday = $_POST['birthday'];
        $gend = $_POST['gend'];
        $addr = $_POST['addr'];
        $dis = $_POST['dis'];

        $old_photo = $_POST['old_photo'];  // Hidden input in form
        $new_photo = $_FILES["photo"]["name"];

        // If a new photo is uploaded
        if (!empty($new_photo)) {
            $tasnim = pathinfo($new_photo, PATHINFO_EXTENSION);
            $photo = time() . "." . $tasnim;
            $uploadPath ='../uploads/' . $photo;

            // Delete old photo file
            $oldPath ='../uploads/' . $old_photo;
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            // Move new photo
            move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadPath);
        } else {
            // Keep old photo if no new file uploaded
            $photo = $old_photo;
        }

        // Update everything including photo
        updateUser($conn, $id, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $photo);

        header("Location: ../view/dashboard.php");
        exit();
    }

    closeConn($conn);
}
?>
