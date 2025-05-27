<?php

include '../model/userdata.php';

$userdata = null;

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    $conn = createConnObj();
    $result = selectUser($conn, $id);

    if (mysqli_num_rows($result) == 1) {
        $userdata = mysqli_fetch_assoc($result);
    }

    closeConn($conn);
}
?>
