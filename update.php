
<?php
session_start();
if(isset($_SESSION["uname"]))
{
	echo "you are allready login";
	exit();
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>

<form method="post" action="update.php">
<table border="2" align="center">
	<tr><td colspan="4">enter the name of student</td><td colspan="3"><input type="text" name="name"/></td></tr>
	<tr><td colspan="7" align="center"><input type="submit" name="search" value="search"></td></tr>
</table>
</form>
</body>
</html>





<?php 

	if (isset($_POST['search'])) 
{
?>
<table>
<tr><th colspan="7">Student Information</th></tr>

	<tr><th>Sr.No.</th><th>Course</th><th>Name </th><th>City</th><th>Qualiffication</th><th>Email-id </th>

<?php
	$con= mysqli_connect( "localhost", "root" ,"","sms");
	$name=$_POST['name'];

	$query="SELECT * FROM `student` WHERE `name`like '$name%' ";
$run=mysqli_query($con,$query);

while ($data=mysqli_fetch_assoc($run)) 
{
?>

	<tr><td><?php echo $data['id'] ?></td><td><?php echo $data['course'] ?></td><td><?php echo $data['name'] ?></td><td><?php echo $data['address'] ?></td><td><?php echo $data['qualification'] ?></td><td><?php echo $data['email'] ?></td>
		<td><a href="update1.php" target="_blank" >edit</a></td></tr>
		<?php
}
?>
</table>
<?php
}	
?>

