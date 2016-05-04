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
<h1>gallery</h1>
<table>
<tr><th>No:</th><th>categary name</th><th>imagename</th><th>image</th><th>Option</th></tr>
<?php
$q=mysqli_connect("localhost","root","","shibin");
$sql="select gallery.gid,gallery.gname,categary.cname from gallery
inner join categary on gallery.cid=categary.id
order by gallery.gid;";
$r=mysqli_query($q,$sql);
if(mysqli_num_rows($r)>0)
{
while($row=mysqli_fetch_assoc($r))
{
echo"<tr><td>".$row["gid"]."</td><td>".$row["cname"]
."</td><td>".$row["gname"]."</td><td><img src='uploads/".$row["gname"]."'height='60px' width='100px'></td>
<td><a href=deleteg.php?id=".$row["gid"].">delete</a></td></tr>";
}}
?>
</table>
<?php
mysqli_close($q);

?>

<br><a href="menu.php">Go to menu</a>
<br><br><a href="gallery.php">Go to Gallery</a>
</body>
</html>