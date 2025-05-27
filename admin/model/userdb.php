<?php
function createUserConn() {
    $conn = mysqli_connect("localhost", "root", "", "userdata"); // change "userDB" to your actual user database name

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
?>
