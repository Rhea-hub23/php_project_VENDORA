<?php
include 'db.php';

$id = $_GET['id'];

// Fetch existing product
$sql = "SELECT * FROM shoppingcart WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE shoppingcart SET product_name='$product_name', category='$category', price=$price, quantity=$quantity WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Edit Product</h2>
    <form method="post">
        <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" required>
        <input type="text" name="category" value="<?php echo $row['category']; ?>" required>
        <input type="number" name="price" value="<?php echo $row['price']; ?>" required>
        <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required>
        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
