<?php
function createConnObj() {
   $conn = mysqli_connect("localhost", "root", "", "adminDB");

   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }

   return $conn;
}

function insertAdmin($conn, $user_name, $email, $password, $address, $dob, $gender, $phone, $nid, $license, $picture) {
   $sql = "INSERT INTO admin (user_name, email, password, address, dob, gender, phone, nid, trade_license, picture)
           VALUES ('$user_name', '$email', '$password', '$address', '$dob', '$gender', '$phone', '$nid', '$license', '$picture')";

   if (mysqli_query($conn, $sql)) {
       echo "Data inserted successfully!";
   } else {
       echo "Error: " . mysqli_error($conn);
   }
}

function closeConn($conn) {
   mysqli_close($conn);
}
?>
