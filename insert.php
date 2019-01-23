<?php

$con= mysqli_connect( "localhost", "root" ,"","student");
if($con)
{
	echo "connected<br>";
}
else{
	echo "error<br>";
}


$num= $_POST["num"];
$Course= $_POST["Course"];
$WB= $_POST["WB"];
$ST= $_POST["ST"];
$DB= $_POST["DB"];
$SF= $_POST["SF"];

$query="INSERT INTO `information`(`num`, `Course`, `WB`, `ST`, 'DB', 'SF') VALUES ([num],[Course],[WB],[ST],[DB],[SF])";

$run=mysqli_query($con,$query);
echo $query;
if($run==TRUE)
{
echo "data inserted";
}
else
{
	echo "data not inserted";
}
