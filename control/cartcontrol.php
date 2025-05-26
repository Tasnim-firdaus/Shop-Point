<?php
'C:/xampp/htdocs/ShopPoint/model/cartdata.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $product = $_POST['product'];
        $qty     = $_POST['qty'];
        $price   = $_POST['price'];

      
        // ✅ Redirect to cart.php after insertion
        header("Location: ../view/cart.php");
        exit();
    }
}
?>