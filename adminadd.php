<html>
<body bgcolor ="#151515">
<form action ="home.html" method="post">
<center>
<br>
<br>
<?php
include_once'conn.php';
if(isset($_POST['submit']))
{
$fname=$_POST['Name'];
$quan=$_POST['Quantity'];
$price=$_POST['Price'];
$sql="INSERT INTO shop(Name,Quantity,Price)VALUES('$fname','$quan','$price')";
if(mysqli_query($conn,$sql))
{
    echo "record created Succesfully";
}
else
{
    echo "Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit" value="Back to Home Page" name="submit">
</center>
</body>
</html>