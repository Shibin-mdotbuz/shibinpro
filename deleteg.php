<!DOCTYPE html>
<html>
<head>

</style>
<title>menu</title>
</head>
<body>
<h1>gallery</h1>

<?php
$q=mysqli_connect("localhost","root","","shibin");
$id=$_GET["id"];
$sql= "delete from gallery where gid=$id;";

if(mysqli_query($q,$sql))
{
echo "categary deleted";
}
else{ echo "categary not deleted".mysqli_error($q);}
mysqli_close($q);

?>

<br><a href="vg.php">View gallery</a>
<br><br><a href="menu.php">Menu</a>
</body>
</html>