<?php
$showMessage = "";

if (isset($_COOKIE['welcomeName']) && !empty($_COOKIE['welcomeName'])) {
    $showMessage = "Welcome, " . $_COOKIE['welcomeName'] . "!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

<h2><?php echo $showMessage; ?></h2>

<h1>Home Page</h1>

<ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="product.php">Browse Products</a></li>
    <li><a href="cart.php">View Cart</a></li>
    <li><a href="order.php">My Order</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
