<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO shoppingcart (product_name, category, price, quantity) VALUES ('$product_name', '$category', $price, $quantity)";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Add New Product</h2>
    <form method="post">
        <input type="text" name="product_name" placeholder="Enter product name" required>
        <input type="text" name="category" placeholder="Enter category" required>
        <input type="number" name="price" placeholder="Enter price" required>
        <input type="number" name="quantity" placeholder="Enter quantity" required>
        <button type="submit">Save</button>
    </form>
</div>

</body>
</html>
