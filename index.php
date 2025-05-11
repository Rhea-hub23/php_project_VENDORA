<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart - Vendora</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>VENDORA</h1>
    <div>
        <a href="cart.php" class="nav-link">Cart</a>
    </div>
</div>

<div class="container">
    <h2>SHOPPING CART</h2>
    <a href="add.php" class="btn-add">Add New Product</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM shoppingcart";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['product_name']."</td>
                            <td>".$row['category']."</td>
                            <td>".$row['price']."</td>
                            <td>".$row['quantity']."</td>
                            <td>
                                <a href='edit.php?id=".$row['id']."' class='btn-edit'>Edit</a>
                                <a href='delete.php?id=".$row['id']."' class='btn-delete'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
