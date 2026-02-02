<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>My Shop</h1>

<a href="logout.php" style="float:right; margin:10px; color:red;">
Logout
</a>

<div class="container">

<a href="add.php" class="add-btn">+ Add Product</a>

<h2>Products</h2>

<?php

$result = mysqli_query($conn, "SELECT * FROM products");

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='product'>";
        echo "<h3>".$row['name']."</h3>";
        echo "<p class='price'>₹".$row['price']."</p>";
        echo "<p>".$row['description']."</p>";
        echo "<a href='delete.php?id=".$row['id']."' style='color:red;'>Delete</a>";
        echo "</div>";
    }

}else{
    echo "No products available";
}

?>

</div>

</body>
</html>