<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		input text{
			width: 400px;
		}
	</style>
	
	<title>ADD STUDENT</title>
</head>
<body>
	<h3 align="center">ENTER THE STUDENT DETAIL</h3>
<form method="post" action="add-student.php">
	<table align="center" border="1" width="400px">
		<tr><td>Enter The Name</td><td><input type="text" name="name" ></td></tr>
		<tr><td>Enter The Address</td><td><input type="text" name="address"></td></tr>
		<tr><td>Enter The Email</td><td><input type="text" name="email"></td></tr>
		<tr><td>Enter The Qualification</td><td><input type="text" name="qualification"></td></tr>
		<tr><td>Enter The Course</td>
			<td>
            <select name="Course">
			        <option value="Course">Please Select The Course</option>
			        <option value="WB">Web-Designing</option>
			        <OPTION value="ST">Software-Testing</OPTION>
			        <OPTION value="DB">Database</OPTION>
			        <OPTION value="SF">Salesforce</OPTION>
	        </select>
	    </td></tr>
        <tr><td>Upload Image</td><td><input type="file" name="image" ></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td></tr>
	</table>


</form>
</body>
</html>




<?php
//include_once("dbcon.php");
//echo $con;
$con= mysqli_connect("localhost", "root" ,"","sms") or die(mysqli_error());

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$course=$_POST['Course'];

$query="INSERT INTO `student`(`name`, `address`, `email`, `qualification`, `course`) VALUES ('$name','$address','$email','$qualification', '$course')";
echo $query;
$run=mysqli_query($con,$query);
if ($run==true) {
	echo "student data inserted";
	$yes=true;
}
if($yes==true)
{
	header('Location: welcome.php');
}
?>
