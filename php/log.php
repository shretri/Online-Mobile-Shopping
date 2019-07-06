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
$password=$_POST['password'];
$sql="Select * from users where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
echo 'you are now logged in';
header("refresh:2; url=index2.html");
}
else
{
echo 'username or password is incorrect';
header("refresh:2; url=login.html");
}
?>