<?php
function getAllUsers($conn) {
    $sql = "SELECT * FROM userinfo";
    return mysqli_query($conn, $sql);
}

function getUserById($conn, $id) {
    $sql = "SELECT * FROM userinfo WHERE id = $id";
    return mysqli_query($conn, $sql);
}

function addUser($conn, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $pass) {
    $sql = "INSERT INTO userinfo (fname, lname, birthday, gend, phn, addr, dis, pass)
            VALUES ('$fname', '$lname', '$birthday', '$gend', '$phn', '$addr', '$dis', '$pass')";
    return mysqli_query($conn, $sql);
}

function updateUser($conn, $id, $fname, $lname, $birthday, $gend, $phn, $addr, $dis, $pass) {
    $sql = "UPDATE userinfo 
            SET fname='$fname', lname='$lname', birthday='$birthday', gend='$gend',
                phn='$phn', addr='$addr', dis='$dis', pass='$pass'
            WHERE id=$id";
    return mysqli_query($conn, $sql);
}

function deleteUser($conn, $id) {
    $sql = "DELETE FROM userinfo WHERE id = $id";
    return mysqli_query($conn, $sql);
}
?>
