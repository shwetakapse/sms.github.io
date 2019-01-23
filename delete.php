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


$query="DELETE FROM `information` WHERE `id`='$id'";
$run=mysqli_query($con,$query);
echo $query;
if($run==TRUE)
{
echo "data deleted";
}
else
{
	echo "wrong data";
}

?>