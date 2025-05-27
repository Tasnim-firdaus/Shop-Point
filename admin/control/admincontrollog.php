<?php
session_start(); // ✅ SESSION START for future use (needed for login)

include '../model/admindata.php'; // model file for DB connection

// Initialize error variables
$user_nameError = $emailError = $passwordError = $confirmPasswordError = $phoneError = $nidError = "";

// Initialize form field variables
$user_name = $email = $password = $confirm_password = $address = $dob = $gender = $phone = $nid = $license = "";

// Validation flag
$isValid = true;

if (isset($_REQUEST["Submit"])) {

    if (empty($_REQUEST["user_name"])) {
        $user_nameError = "Invalid username <br>";
        $isValid = false;
    } else {
        $user_name = $_REQUEST["user_name"];
        if (!preg_match("/^[A-Z][a-z]+(?: [A-Z][a-z]+)*$/", $user_name)) {
            $user_nameError = "Name must start with a capital letter and follow with lowercase letters, spaces allowed";
            $isValid = false;
        }
    }

    if (empty($_REQUEST["email"])) {
        $emailError = "Invalid email <br>";
        $isValid = false;
    } else {
        $email = $_REQUEST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format <br>";
            $isValid = false;
        }
    }

    if (empty($_REQUEST["password"])) {
        $passwordError = "Password required";
        $isValid = false;
    } elseif (strlen($_REQUEST["password"]) < 8) {
        $passwordError = "Password must be at least 8 characters long";
        $isValid = false;
    } else {
        $password = $_REQUEST["password"];
    }

    if (empty($_REQUEST["confirm_password"])) {
        $confirmPasswordError = "Confirm Password required";
        $isValid = false;
    } elseif ($_REQUEST["confirm_password"] != $_REQUEST["password"]) {
        $confirmPasswordError = "Passwords do not match";
        $isValid = false;
    } else {
        $confirm_password = $_REQUEST["confirm_password"];
    }

    if (empty($_REQUEST["phone"])) {
        $phoneError = "Phone number required";
        $isValid = false;
    } else {
        $phone = $_REQUEST["phone"];
        if (!preg_match("/^[0-9]{11}$/", $phone)) {
            $phoneError = "Phone number must be exactly 11 digits <br>";
            $isValid = false;
        }
    }

    if (empty($_REQUEST["National_ID"])) {
        $nidError = "NID number required <br>";
        $isValid = false;
    } else {
        $nid = $_REQUEST["National_ID"];
        if (!preg_match("/^\d{17}$/", $nid)) {
            $nidError = "NID number must be exactly 17 digits <br>";
            $isValid = false;
        }
    }

    if ($isValid) {
        $address = $_REQUEST["Address"];
        $dob = $_REQUEST["Date_of_Birth"];
        $gender = $_REQUEST["gender"];
        $license = $_REQUEST["Trade_License"];

        // ✅ Handle profile picture upload
        $filename = $_FILES["profile_pic"]["name"];
        $tempname = $_FILES["profile_pic"]["tmp_name"];
        $folder = "../uploads/";

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $uniqueName = time() . "." . $ext; // generate unique filename
        $targetPath = $folder . $uniqueName;

        // Move uploaded file
        move_uploaded_file($tempname, $targetPath);

        // ✅ Insert all data including picture
        $conn = createConnObj();
        insertAdmin($conn, $user_name, $email, $password, $address, $dob, $gender, $phone, $nid, $license, $uniqueName);
        closeConn($conn);

        header("Location: ../view/adminlogin.php");
        exit();
    }
}
?>
