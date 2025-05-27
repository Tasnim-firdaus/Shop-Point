<?php

function createConnObj() {
    return new mysqli("localhost", "root", "", "shopbd");
}

function insertData($conn, $product, $qty, $price) {
    $sql = "INSERT INTO cart (product, qty, price) VALUES ('$product', '$qty', '$price')";

    if ($conn->query($sql)) {
        
    } else {
        echo "Error: " . $conn->error;
    }
}

function closeConn($conn) {
    $conn->close();
}
$conn = createConnObj();                     
    insertData($conn, $product, $qty, $price);  
    closeConn($conn);                            

?>
