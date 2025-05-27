<?php include '../../control/cartcontrol.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h2>Products</h2>

<table border="1">
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Add to Cart</th>
    </tr>
    
    <tr>
        <form method="post" action="">
            <td>Pen</td>
            <td>10.00</td>
            <td><input type="number" name="qty" value="1" min="1"></td>
            <td>
                <input type="hidden" name="product" value="Pen">
                <input type="hidden" name="price" value="10.00">
                <input type="submit" name="add" value="Add to Cart">
            </td>
        </form>
    </tr>

    <tr>
        <form method="post" action="">
            <td>Notebook</td>
            <td>50.00</td>
            <td><input type="number" name="qty" value="1" min="1"></td>
            <td>
                <input type="hidden" name="product" value="Notebook">
                <input type="hidden" name="price" value="50.00">
                <input type="submit" name="add" value="Add to Cart">
            </td>
        </form>
    </tr>

    <tr>
        <form method="post" action="">
            <td>Bag</td>
            <td>120.00</td>
            <td><input type="number" name="qty" value="1" min="1"></td>
            <td>
                <input type="hidden" name="product" value="Bag">
                <input type="hidden" name="price" value="120.00">
                <input type="submit" name="add" value="Add to Cart">
            </td>
        </form>
    </tr>
</table>

<p><a href="cart.php">Go to Cart</a></p>

</body>
</html>
