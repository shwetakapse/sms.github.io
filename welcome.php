<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="welcome-css.css">
	<title>admin</title>
</head>
<body>
<h4 style="float:right"><a href="logout1.php">Logout</a></h4>
<h1 >
	<center>
		<div id="header">
<?php
session_start();
if(isset($_SESSION["uname"]))
{
echo "Welcome ".$_SESSION["uname"];
}
else
{
	echo "you are not login";
}
?>
</div>
</center>
</h1>
<div class="main">
<table align="center" border="1" width="300px">
	
	<tr><td align="center"><a href="add-student.php" target="_blank">add student</a></td></tr>
	<tr><td align="center"><a href="update.php" target="_blank">Update student record</a></td></tr>
	<tr><td align="center"><a href="delete.php" target="_blank">delete student record</a></td></tr>

</table>
</div>
<center><div id="footer"><h3>&copy;WeLcOmE</h3></div></center>
</body>
</html>








<!--<h2 style="float:right"><a href="logout1.php">Logout</a></h2>-->
<!--<div>
	
	<li><a href="add-student.php">add student</a><br></li>
	<li><a href="add-student.php">add student</a><br></li>
	<li><a href="add-student.php">add student</a></li>

</div>

<div>
	
</div>-->

