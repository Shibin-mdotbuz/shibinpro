<!DOCTYPE html>
<html>
<head>

</style>
<title>menu</title>
</head>
<body>
<h1>Categary</h1>

<?php
$q=mysqli_connect("localhost","root","","shibin");
$id=$_GET["id"];
$sql= "delete from categary where id=$id;";

if(mysqli_query($q,$sql))
{
echo "categary deleted";
}
else{ echo "categary not deleted".mysqli_error($q);}
mysqli_close($q);

?>

<br><a href="vc.php">View Categary</a>
<br><br><a href="menu.php">Menu</a>
</body>
</html>