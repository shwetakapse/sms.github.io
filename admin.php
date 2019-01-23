<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin-css.css">
	<title>Admin Log-in</title>
</head>
<body>

<form method="post" action="admin.php">
    <div id="header">    
                     <h1 align="center">WELCOME ADMIN</h1>
    </div>
<div class="main" align="center">    
    <h4 align="center">Enter Your Login ID</h4>

	<img src="image.jpg"><a href="admin.php" target="_blank"><h3>Admin Login</h3></a>
                                                            Login ID:<input type="text" name="ID"><br><br>
                                                            Password:<input type="password" name="PW"><br><br>
<input type="submit" name="submit" value="submit">
</div>
<center><div id="footer"><h3>&copy;WeLcOmE</h3></div></center>
</form>
</body>
</html>


<?php
$usd=$_POST['ID'];
$pwd=$_POST['PW'];
$con= mysqli_connect( "localhost", "root" ,"","sms") or die(mysqli_error());

$query="SELECT * FROM `admin` WHERE `username`='$usd' and `password`='$pwd' ";
echo $query;
$run=mysqli_query($con,$query);
if((mysqli_num_rows($run))<1)
{
	echo "wrong username/password";
}

else{

session_start();

	$_SESSION["uname"]=$usd;
	header('Location: welcome.php');

	//header('location:SI.php');
}
?>

