<!DOCTYPE html>
<html>
<head>
<style>
table{border-collapse:collapse;}
table,th,td{border:1px solid black;}
th{background-color:green;color:white;}
</style>
<title>menu</title>
</head>
<body>
<h1>Categary</h1>
<table>
<tr><th>No:</th><th>categary name</th><th>Option</th></tr>
<?php
$q=mysqli_connect("localhost","root","","shibin");
$sql="select * from categary";
$r=mysqli_query($q,$sql);
if(mysqli_num_rows($r)>0)
{
while($row=mysqli_fetch_assoc($r))
{
echo"<tr><td>".$row["id"]."</td><td>".$row["cname"]
."</td><td><a href=deletec.php?id=".$row["id"].">delete</a></td></tr>";
}}
?>
</table>
<?php
mysqli_close($q);

?>

<br><a href="categary.php">Go to Categary</a>
<br><br><a href="menu.php">Menu</a>
</body>
</html>