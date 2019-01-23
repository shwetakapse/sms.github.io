<?php


$con= mysqli_connect( "localhost", "root" ,"","student");
if($con)
{
	echo "connected<br>";
}
else{
	echo "error<br>";
}

if (isset('submit')) {
	
$num=$_POST['num'];
$query="SELECT * FROM `information` where `num`=$num and=";
$run=mysqli_query($con,$query);
}

?>

<table border="2" align="center">
	<tr><th>Serial Number </th><th>Course</th><th>Name </th><th>City</th><th>Qualiffication</th><th>Email-id </th></tr>
<?php 
while ($data=mysqli_fetch_assoc($run)) {
	
?>

<tr><td><?php echo $data['Serial Number'] ?> </td><td><?php echo $data['Course'] ?> </td><td><?php echo $data['Name'] ?> </td><td><?php echo $data['Qualiffication'] ?> </td><td><?php echo $data['Email_id'] ?> </td></tr>
<?php
	
}

?>
</table>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form method="POST" action="displayP.php">
	Enter Number<input type="text" name="num"><br>
	<input type="submit" name="submit" value="submit">


</form>
</body>
</html>