<!DOCTYPE html>
<html>
<head>
<title>menu</title>
</head>
<body>
<h1>Add Categary</h1>
<form method="post"enctype="multipart/form-data">
upload file:<input type="file" name="file">
categary:
<select name="id">
<?php $q=mysqli_connect("localhost","root","","shibin");
$sq="select * from categary";
$r=mysqli_query($q,$sq);
if(mysqli_num_rows($r)>0)
{
while($row=mysqli_fetch_assoc($r))
{
$k=$row["id"];
$l=$row["cname"];
echo "<option value='".$k."' >".$l."</option>";}}?>
</select>
<br>
<input type="submit" name="sub" value="submit">
</form>
<?php
if(isset($_POST["sub"]))
{
$n=$_POST["id"];
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$fn=$_FILES["file"]["name"];
$q=mysqli_connect("localhost","root","","shibin");
$sql="insert into gallery(cid,gname)
values('$n','$fn');";
if(mysqli_query($q,$sql))
{
echo "gallery added";
}
else{echo "gallery error".mysqli_error();}
mysqli_close($q);
}
?>
<br><a href="menu.php">Menu</a>
<br><br><a href="gallery.php">Gallery</a>
</body>
</html>