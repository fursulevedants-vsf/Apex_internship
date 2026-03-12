<?php
include "config.php";

$id=$_GET['id'];

if(isset($_POST['update'])){
$title=$_POST['title'];
$content=$_POST['content'];

$conn->query("UPDATE posts SET title='$title',content='$content' WHERE id=$id");

header("Location:index.php");
}

$result=$conn->query("SELECT * FROM posts WHERE id=$id");
$row=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Post</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Edit Post</h2>

<form method="POST">

Title
<input type="text" name="title" value="<?php echo $row['title']; ?>">

Content
<textarea name="content"><?php echo $row['content']; ?></textarea>

<button name="update">Update Post</button>

</form>

</div>

</body>
</html>