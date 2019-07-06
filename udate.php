<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='online shopping';
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$sql="update sam set quantity=quantity-1 where mname='GALAXY A9 PRO'";
mysqli_query($conn,$sql);
?>