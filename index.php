<!DOCTYPE html>
<?php


$product_name = $category = $price = "";
$stock = $expiration = $status = "";

$product_name_error = $category_error = $price_error = "";
$stock_error = $expiration_error = $status_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_name = trim($_POST["product_name"]);
    $category = $_POST["category"];
    $price = $_POST["price"];
    $stock = $_POST["stock_quantity"];
    $expiration = $_POST["expiration_date"];
    $status = $_POST["status"];

    if (empty($product_name)) {
        $product_name_error = "Product name is required";
    }

    if (empty($category)) {
        $category_error = "Category is required";
    }

    if (!isset($price) || !is_numeric($price) || $price <= 0) {
        $price_error = "Price must be greater than 0";
    }

    if (!isset($stock) || !is_numeric($stock) || $stock < 0) {
        $stock_error = "Stock quantity must be a number and cannot be negative";
    }

    if (empty($expiration)) {
        $expiration_error = "Expiration date is required";
    } else {
        $today = date("Y-m-d");
        if ($expiration < $today) {
            $expiration_error = "Expiration date cannot be in the past";
        }
    }

    if (empty($status)) {
        $status_error = "Status is required";
    }
}   
    if (
        empty($product_name_error) &&
        empty($category_error) &&
        empty($price_error) &&
        empty($stock_error) &&
        empty($expiration_error) &&
        empty($status_error)
    ) {
       
        header("Location: redirect.php");
        exit;
    }
 else {
  
    $product_name_error = $category_error = $price_error = "";
    $stock_error = $expiration_error = $status_error = "";
    $product_name = $category = $price = "";
    $stock = $expiration = $status = "";
}
?>
?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Enter Product Details</h2>
    <form action="" method="post">

        <label>Product Name:</label><br>
        <input type="text" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>">
        <span style="color:red;"><?php echo $product_name_error; ?></span><br><br>

        <label>Category:</label><br>
        <select name="category">
            <option value="">---Select Category---</option>
            <option value="Category A" <?php if ($category == "Category A") echo "selected"; ?>>Category A</option>
            <option value="Category B" <?php if ($category == "Category B") echo "selected"; ?>>Category B</option>
            <option value="Category C" <?php if ($category == "Category C") echo "selected"; ?>>Category C</option>
            <option value="Category D" <?php if ($category == "Category D") echo "selected"; ?>>Category D</option>
        </select>
        <span style="color:red;"><?php echo $category_error; ?></span><br><br>

        <label>Price (₱):</label><br>
        <input type="number" name="price" step="0.01" value="<?php echo htmlspecialchars($price); ?>">
        <span style="color:red;"><?php echo $price_error; ?></span><br><br>

        <label>Stock Quantity:</label><br>
        <input type="number" name="stock_quantity" min="0" value="<?php echo htmlspecialchars($stock); ?>">
        <span style="color:red;"><?php echo $stock_error; ?></span><br><br>

        <label>Expiration Date:</label><br>
        <input type="date" name="expiration_date" value="<?php echo htmlspecialchars($expiration); ?>">
        <span style="color:red;"><?php echo $expiration_error; ?></span><br><br>

        <label>Status:</label><br>
        <input type="radio" name="status" value="active" <?php if ($status == "active") echo "checked"; ?>> Active<br>
        <input type="radio" name="status" value="inactive" <?php if ($status == "inactive") echo "checked"; ?>> Inactive
        <span style="color:red;"><?php echo $status_error; ?></span><br><br>

        <input type="submit" value="Save Product">
    </form>
</body>
</html>
