<?php

$con =mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'online shopping'))
{
	echo 'not selected';
}
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql= "Insert into users(username,email,password) values('$username','$email','$password')";
if(!mysqli_query($con,$sql))
{
	echo 'not inserted';
}
else
{
	echo 'inserted';
}
header("refresh:2; url=Index.html");

?>