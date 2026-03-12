<?php
include "config.php";

if(!isset($_SESSION['user_id'])){
header("Location:login.php");
}

$result=$conn->query("SELECT * FROM posts");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="topbar">
<h2>Blog Dashboard</h2>
<a href="create.php">Create Post</a> |
<a href="logout.php">Logout</a>
</div>

<div class="container">

<table>
<tr>
<th>Title</th>
<th>Content</th>
<th>Actions</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['content']; ?></td>

<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>