<?php
include "config.php";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO products (name, price, description)
            VALUES ('$name', '$price', '$desc')";

    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>Add New Product</h2>

<form method="post">

    Name: <br>
    <input type="text" name="name" required><br><br>

    Price: <br>
    <input type="number" name="price" required><br><br>

    Description: <br>
    <textarea name="desc" required></textarea><br><br>

    <button type="submit" name="submit">Add Product</button>

</form>

</body>
</html>