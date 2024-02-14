<?php
 
$name=$_POST['name'];
$email=$_POST['email'];
$order=$_POST['order'];
$price=$_POST['price'];
$type=$_POST['type'];

$mysql = mysqli_connect("localhost", "root")  
or die("Can't connect to DB"); 
mysqli_select_db($mysql, "box_orders")  
or die("Can't select DB"); 
mysqli_query($mysql, "insert into order_deets values('$name',' $email',' $order', '$type','$price')") 
or die("Query failed to insert"); 
$result = mysqli_query($mysql,"select * from order_deets"); 
?>
<html>
<head><title>Cart Details</title></head>
<body bgcolor="#ebe4e6">

<center>
<h3>My Cart</h3>
<table border="1" cellpadding="8px">
<tr>
<th>Order name</th>
<th>Order type</th>
<th>Price</th>
</tr>
<?php
while($array=mysqli_fetch_row($result)): 
echo
"<tr>
<td>$array[2]</td>
<td>$array[3]</td>
<td>$array[4]</td>
</tr>"; 
endwhile;  
?>
<?mysqli_free_result($result);?>
<?mysqli_close($mysql);?>

<br><br>
</table>
<br>
<a href="home1.html">Go back to Home</a>
</center>
</body>
</html>
