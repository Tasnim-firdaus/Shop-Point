<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
</head>
<body>

<h2>Your Cart</h2>

<table border="1">
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th>Remove</th>
    </tr>

    <tr>
        <td>Pen</td>
        <td>2</td>
        <td>10.00</td>
        <td>20.00</td>
        <td>
            <form action="../control/cartcontrol.php" method="post">
                <input type="hidden" name="id" value="1">
                <button type="submit" name="delete">Remove</button>
            </form>
        </td>
    </tr>

    <tr>
        <td>Notebook</td>
        <td>1</td>
        <td>50.00</td>
        <td>50.00</td>
        <td>
            <form action="../control/cartcontrol.php" method="post">
                <input type="hidden" name="id" value="2">
                <button type="submit" name="delete">Remove</button>
            </form>
        </td>
    </tr>
</table>

<p>
    <strong>Grand Total: 70.00</strong>
</p>

<form action="checkout.php" method="post">
    <input type="submit" value="Checkout">
</form>

</body>
</html>
