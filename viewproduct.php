<label>Product Name: <?php echo isset($_POST["product_name"]) ? htmlspecialchars($_POST["product_name"]) : ""; ?></label><br>
<label>Category: <?php echo isset($_POST["category"]) ? htmlspecialchars($_POST["category"]) : ""; ?></label><br>
<label>Price: ₱<?php echo isset($_POST["price"]) ? number_format($_POST["price"], 2) : "0.00"; ?></label><br>
<label>Stock Quantity: <?php echo isset($_POST["stock_quantity"]) ? htmlspecialchars($_POST["stock_quantity"]) : ""; ?></label><br>

<?php
    if (isset($_POST["expiration_date"])) {
        $rawDate = $_POST["expiration_date"];
        $formattedDate = date("M-d-Y", strtotime($rawDate));
    } else {
        $formattedDate = "";
    }
?>
<label>Expiration Date: <?php echo htmlspecialchars($formattedDate); ?></label><br>

<label>Status: <?php echo isset($_POST["status"]) ? htmlspecialchars($_POST["status"]) : ""; ?></label><br>
