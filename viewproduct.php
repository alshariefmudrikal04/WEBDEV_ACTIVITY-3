<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Info</title>
</head>
<body>
    <h2>Product Information</h2>

    <label>Product Name: <?php echo $_POST["product_name"]; ?></label><br>
    <label>Category: <?php echo $_POST["category"]; ?></label><br>
    <label>Price: ₱<?php echo number_format($_POST["price"], 2); ?></label><br>
    <label>Stock Quantity: <?php echo $_POST["stock_quantity"]; ?></label><br>
    <label>Expiration Date: <?php echo $_POST["expiration_date"]; ?></label><br>
    <label>Status: <?php echo $_POST["status"]; ?></label><br>
</body>
</html>
