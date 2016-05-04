<!DOCTYPE html>
<html>
<head>
<title>menu</title>
</head>
<body>
<h1>Add Category</h1>
<form method="post">
categary name:<input type="text" name="name">
<br>
<input type="submit" name="sub" value="submit">
</form>
<?php
if(isset($_POST["sub"]))
{
$n=$_POST["name"];
$q=mysqli_connect("localhost","root","","shibin");
$sql="insert into categary(cname)
values('$n');";
if(mysqli_query($q,$sql))
{
echo "Category added";
}
else{echo "Category exists";}
mysqli_close($q);
}
?>
<br><a href="menu.php">Menu</a>
<br><br><a href="gallery.php">Gallery</a>
</body>
</html>