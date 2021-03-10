<html>
<head><title>Delete Products</title>
</head>
<body bgcolor="#151515">
<center>
<?php
include_once'conn.php';
$sql="SELECT * FROM shop";
$result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
{
?>

<br><br>
<table border="2">
<tr style="color : white">
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
<tr style="color : red">
<td><?php echo$row["id"]; ?></td>
<td><?php echo$row["Name"]; ?></td>
<td><?php echo $row["Quantity"]; ?></td>
<td><?php echo $row["Price"]; ?></td>
</tr>

<?php
$i++;
}
?>

</table>

</tr><br><br><br>
<form style="color : cyan" method="post" action="deleteshop2.php">
Enter the ID to Delete :&nbsp&nbsp
<input type="text" name="id">
<br><br><br>
<input type="submit" name="Submit" value="SUBMIT">
</form>

<?php
}
else
{
echo"No result found";
}
mysqli_close($conn);
?>
</center>
</body>
</html>


