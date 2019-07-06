
<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='lab test';
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$sql="select * from product";
$resultset=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($resultset))
{
echo "<ul>";
echo "<li>"."<b>"." Product Name:   "."</b>".$row['name']."</li>";
echo"<br>";
echo "<li>"."<b>"." Stock:   "."</b>".$row['stock']."</li>";
echo"<br>";
echo "<li>"."<b>"." Original Price:   "."</b>".$row['oprice']."</li>";
echo"<br>";
echo "<li>"."<b>"." Discount Price:   "."</b>".$row['dprice']."</li>";
echo"<br>";
echo"</ul>";
}
?>
<html>
<body>
</body>
</html>