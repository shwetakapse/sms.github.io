<!DOCTYPE html>
<html>
<head>
	<title>image-upload</title>
</head>
<body>
<form method="post" action="imageupload.php" enctype="multipart/form-data">
	<input type="file" name="img" required="required"><br>
	<input type="submit" name="submit" value="upload image">
	
</form>
</body>
</html>

<?php
if (isset($_POST['submit']))
 {
$imagename=$_FILES['img']['name'];	
$tempname=$_FILES['img']['tmp_name'];


$con=mysqli_connect("localhost", "root","", "student") or die(mysqli_error());
move_uploaded_file($tempname, "images/$imagename");

//echo $imagename."<br>";
//echo $tempname."<br>";
$query="INSERT INTO `image`( `imagename`) VALUES ('$imagename')";
//$query="INSERT INTO `image`(`imagename`) VALUES ($imagename)";
//echo $query;

$run=mysqli_query($con,$query);

if ($run==true) {
	# codee...
	echo "image uploaded";
}
//else{
//	echo "image not uploaded";
//



}

?>