<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='lab test';
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$sql= "Insert into product(username,email,password) values('$username','$email','$password')";
$resultset=mysqli_query($conn,$sql);
