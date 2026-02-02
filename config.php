<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "shop_db"
);

if(!$conn){
    die("Database not connected");
}

?>