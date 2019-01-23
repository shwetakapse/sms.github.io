<?php

$con= mysqli_connect( "localhost", "root" ,"","sms");

require('update.php');

$user=$_POST['id'];

$query="SELECT * FROM `student` WHERE `id`=$user"
$run= mysqli_query($con,$query);
$data1=mysqli_fetch_assoc($run)
?>