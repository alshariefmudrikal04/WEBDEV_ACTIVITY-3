<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    
    <form action="viewproduct.php" method="post">
        <label>Product Name</label>
        <input type="text" name="product_name" required><br>
    <label for="">Category:
    </label><br>
    <select name="category" id="">
    <option value="">---Select Category---</option>
    <option value="Caregory A">Caregory A</option>
    <option value="Caregory B">Caregory B</option>
    <option value="Caregory C">Caregory C</option>
    <option value="Caregory D">Caregory D</option>
    </select><br>

    <label>Price (&#8369):</label><br>
    <input type="number" name="price" step="0.01" required><br>
    <label>Stock Quantity:</label><br>
     <input type="number" name="stock_quantity" min="0" required><br>
    <label>Expiration Date:</label><br>
    <input type="date" name="expiration_date"><br>
    <label>Status:</label><br>
    <input type="radio" name="status" value="active" checked>Active<br>
     <input type="radio" name="status" value="inactive" checked>Inactive<br><br>
     <input type="submit" value="Save Product">
      </form>
    
    




</body>
</html>
