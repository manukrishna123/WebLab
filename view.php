<html>
<head>
<title>View  Products</title>
</head>
<body bgcolor="lightpink">
<form action="home.html"method="post">
<center>
<?php
include_once'conn.php';
$sql="SELECT *FROM shop";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?><br><br>
<table border="2">
<tr>
<th>id</th>
<th>Name</th>
<th>Quantity</th>
<th>Price</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["id"];?></td>
<td><?php echo $row["Name"];?></td>
<td><?php echo $row["Quantity"];?></td>
<td><?php echo $row["Price"];?></td

</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "no result found";
}
?>
<br><br>
<input type="submit"value="back to home page"name="submit">
</center>
</form>
</body>
</html>
