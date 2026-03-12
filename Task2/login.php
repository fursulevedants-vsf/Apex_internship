<?php
include "config.php";

if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];

$result=$conn->query("SELECT * FROM users WHERE username='$username'");
$user=$result->fetch_assoc();

if($user && password_verify($password,$user['password'])){
$_SESSION['user_id']=$user['id'];
header("Location:index.php");
}else{
echo "Invalid Login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<h2>User Login</h2>

<form method="POST">
Username
<input type="text" name="username">

Password
<input type="password" name="password">

<button name="login">Login</button>
</form>

</div>

</body>
</html>