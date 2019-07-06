<html>
<body>
<style>
h1
{
    font-size: 50px;  
    background-color:black;
    color: white;
    text-align: center;
	font-family: "Times New Roman", Times, serif;
}
</style>
<h1>SONY XPERIA Z5 PREMIUM</h1>
<center>
<img src="sony_xperia_z5_premium.jpg"style="width:280px;height:228px;">
</center>
</body>
</html>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='online shopping';
$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$sql="select * from sony where mname='SONY XPERIA Z5 PREMIUM'";
$resultset=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($resultset);
echo "<ul>";
echo "<li>"."<b>"." PRICE:   "."</b>".$row['price']."</li>";
echo"<br>";
echo "<li>"."<b>"." STORAGE:   "."</b>".$row['storage']."</li>";
echo"<br>";
echo "<li>"."<b>"." DISPLAY SIZE:   "."</b>".$row['disp_size']."</li>";
echo"<br>";
echo "<li>"."<b>"." CAMERA PIXEL:   "."</b>".$row['cam_pixel']."</li>";
echo"<br>";
echo "<li>"."<b>"." COLOR:   "."</b>".$row['color']."</li>";

if($row['quantity']==0)
echo "OUT OF STOCK";
else
echo "<li>"."<b>"." QUANTITY:   "."</b>".$row['quantity']."</li>";
echo"</ul>";
?>
<html>
<body>
<center>
<form action="buy.html"><h1>
<input type="submit" value="BUY NOW"></h1>
</center>
</form>
</body>
</html>