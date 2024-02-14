<?php
$sname=$_POST["delname"]; 
$mysql = mysqli_connect("localhost", "root")  
or die("Can't connect to DB"); 
mysqli_select_db($mysql, "box_orders")  
or die("Can't select DB"); 
$count= mysqli_query($mysql, "select count(*) from order_deets where ord_name like '%$sname%'"); 
if (mysqli_fetch_array($count)[0] > 0)  
{ 
mysqli_query($mysql, "delete from order_deets where ord_name like '%$sname%'"); 
echo "  <br>
        <h1> Delete successful! </h1>"; 
} 
else
echo("<h1> Name not found! </h1>"); 
?>

<html>
    <body>
        <a href="home1.html>Back to Home</a>
    </body>
</html>
