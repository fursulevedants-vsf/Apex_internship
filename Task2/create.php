<?php
include "config.php";

if(isset($_POST['create'])){
$title=$_POST['title'];
$content=$_POST['content'];

$conn->query("INSERT INTO posts(title,content,user_id)
VALUES('$title','$content','".$_SESSION['user_id']."')");

header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Post</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Create Post</h2>

<form method="POST">

Title
<input type="text" name="title">

Content
<textarea name="content"></textarea>

<button name="create">Create Post</button>

</form>

</div>

</body>
</html>