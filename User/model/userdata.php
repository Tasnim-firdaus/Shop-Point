<?php

function createConnObj() {
    return mysqli_connect("localhost", "root", "", "login");
}

// ✅ Insert user with photo
function insertUser($conn, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $pass, $cpass, $photo) {
    $sql = "INSERT INTO userinfo (fname, lname, birthday, gend, phn, addr, dis, pass, cpass, photo)
            VALUES ('$fname', '$lname', '$birthday', '$gend', '$phn', '$addr', '$dis', '$pass', '$cpass', '$photo')";
    return mysqli_query($conn, $sql);
}

function selectUser($conn, $id) {
    $sql = "SELECT * FROM userinfo WHERE id='$id'";
    return mysqli_query($conn, $sql);
}

// ✅ One update function for everything (text + photo)
function updateUser($conn, $id, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $photo) {
    $sql = "UPDATE userinfo SET 
            fname='$fname',
            lname='$lname',
            birthday='$birthday',
            gend='$gend',
            phn='$phn',
            addr='$addr',
            dis='$dis',
            photo='$photo'
            WHERE id='$id'";
    return mysqli_query($conn, $sql);
}

function deleteUser($conn, $id) {
    $sql = "DELETE FROM userinfo WHERE id='$id'";
    return mysqli_query($conn, $sql);
}

function checkLogin($conn, $phone, $password) {
    $sql = "SELECT * FROM userinfo WHERE phn='$phone' AND pass='$password'";
    return mysqli_query($conn, $sql);
}

function closeConn($conn) {
    mysqli_close($conn);
}
?>
