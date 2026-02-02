<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $check = mysqli_query($conn,
        "SELECT * FROM admin WHERE username='$user' AND password='$pass'"
    );

    if(mysqli_num_rows($check) == 1){

        $_SESSION['admin'] = $user;
        header("Location: index.php");

    }else{
        echo "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
</head>
<body>

<h2>Admin Login</h2>

<form method="post">

Username:<br>
<input type="text" name="username"><br><br>

Password:<br>
<input type="password" name="password"><br><br>

<button name="login">Login</button>

</form>

</body>
</html>