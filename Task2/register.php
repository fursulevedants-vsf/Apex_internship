<?php
include "config.php";

if(isset($_POST['register'])){
$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$conn->query("INSERT INTO users(username,password) VALUES('$username','$password')");

echo "User Registered! <a href='login.php'>Login</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<h2>User Registration</h2>

<form method="POST">
Username
<input type="text" name="username" required>

Password
<input type="password" name="password" required>

<button name="register">Register</button>
</form>

</div>

</body>
</html>