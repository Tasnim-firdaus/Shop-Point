<?php
include "../model/userdata.php";

$fnameError = $lnameError = $photoError = $birthdayError = $gendError = $phnError = $addError = $passError = $CpassError = "";
$fname = $lname = $birthday = $gend = $phn = $addr = $dis = $pass = $cpass = $photo = "";
$isValid = true;
$uploadPath = "";

if (isset($_POST["Submit"])) {

    if (empty($_POST["fname"])) {
        $fnameError = "Invalid first name";
        $isValid = false;
    } else {
        $fname = $_POST["fname"];
    }

    if (empty($_POST["lname"])) {
        $lnameError = "Invalid last name";
        $isValid = false;
    } else {
        $lname = $_POST["lname"];
    }

    if (empty($_POST["birthday"])) {
        $birthdayError = "Invalid birthday";
        $isValid = false;
    } else {
        $birthday = $_POST["birthday"];
    }

    if (empty($_POST["gend"])) {
        $gendError = "Gender is required";
        $isValid = false;
    } else {
        $gend = $_POST["gend"];
    }

    if (empty($_POST["phn"])) {
        $phnError = "Phone number required";
        $isValid = false;
    } else {
        $phn = $_POST["phn"];
        if (!preg_match("/^(01[3-9]\d{8})$/", $phn)) {
            $phnError = "Invalid phone number format";
            $isValid = false;
        } else {
            $conn = createConnObj();
            $checkResult = mysqli_query($conn, "SELECT * FROM userinfo WHERE phn = '$phn'");
            if (mysqli_num_rows($checkResult) > 0) {
                $phnError = "Phone number already registered";
                $isValid = false;
            }
        }
    }

    if (empty($_POST["add"])) {
        $addError = "Address required";
        $isValid = false;
    } else {
        $addr = $_POST["add"];
    }

    $dis = !empty($_POST["dis"]) ? $_POST["dis"] : "";

    if (empty($_POST["pass"])) {
        $passError = "Password required";
        $isValid = false;
    } elseif (strlen($_POST["pass"]) < 8) {
        $passError = "Password must be at least 8 characters long";
        $isValid = false;
    } else {
        $pass = $_POST["pass"];
    }

    if (empty($_POST["Cpass"])) {
        $CpassError = "Confirm Password required";
        $isValid = false;
    } elseif ($_POST["pass"] !== $_POST["Cpass"]) {
        $CpassError = "Passwords do not match";
        $isValid = false;
    } else {
        $cpass = $_POST["Cpass"];
    }

    // ✅ File check (only get name & prepare path — don't move yet)
    if ($_FILES["photo"]["name"] == "") {
        $photoError = "Insert your profile picture";
        $isValid = false;
    } else {
        $tasnim = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);  // <- Your name 😄
        $photo = time() . "." . $tasnim;
        $uploadPath = "../uploads/" . $photo;
    }

    // ✅ If all data is valid, now upload file and insert into DB
    if ($isValid) {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadPath)) {
            insertUser($conn, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $pass, $cpass, $photo);
            closeConn($conn);
            header("Location: ../view/userlogin.php");
            exit();
        } else {
            $photoError = "File upload failed";
            closeConn($conn);
        }
    } else {
        if (isset($conn)) {
            closeConn($conn);
        }
    }
}
?>
