<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<h3 align="center">ENTER THE UPDATE DETAIL</h3>
<form method="post" action="update1.php">
	<table align="center" border="1" width="400px">
		
<?php
//require('search.php');

$con= mysqli_connect( "localhost", "root" ,"","sms");

$user='1';

$query="SELECT * FROM `student` WHERE `id`='$user'";

echo $query;
$run= mysqli_query($con,$query);
$data1=mysqli_fetch_assoc($run);

print_r($data1)

	?>

		<tr><td>Enter The Name</td><td> <input type="text" name="name" ><?php $data1['name'] ?> </td></tr>
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



