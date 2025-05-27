<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>

<h2>Checkout</h2>

<p><strong>Shipping Address:</strong></p>
<form action="orderConfirm.html" method="post">
    <label for="name">Full Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" cols="30" required></textarea><br><br>

    <input type="submit" value="Place Order">
</form>

</body>
</html>
