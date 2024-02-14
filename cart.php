<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <style>
        th,td {
            line-height: 60px;
        }
        h1, a {
            text-align: center;
            color: #D15076
        }
    </style>
    </head>
    <body>
        <section id="header">
            <img src="images/logo.png" class="logo">
            <div>
                <ul id="navbar">
                    <li><a href="home1.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a class="active" href="cart.html">Cart</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        <br><br>
        </section>
        <br><br><br><br><br><br><br>
        <h1>MY CART</h1>
        <section id="cart">
            <center>
            <table width="50%" border="1" cellpadding="8px">
                <tr>
                    <th>Product</th>
                    <th>Order type</th>
                    <th>Price</th>
                </tr>
                
                
        
                <?php
                    $mysql = mysqli_connect("localhost", "root")  
                    or die("Can't connect to DB"); 
                    mysqli_select_db($mysql, "box_orders")  
                    or die("Can't select DB"); 
                    $result = mysqli_query($mysql,"select * from order_deets"); 
                ?>

                    <?php
                    while($array=mysqli_fetch_row($result)): 
                    echo
                    "<tr>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$array[2]</td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$array[3]</td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$array[4]</td>
                    </tr>"; 
                    endwhile;  

                    $result = mysqli_query($mysql,"select sum(price) from order_deets"); 
                    $count=mysqli_fetch_array($result)[0];
                    echo "<tr>
                            <td></td>
                            <td></td>
                            <td>&nbsp;&nbsp;Price: $count</td>
                          </tr>"
                    ?>
                    <?mysqli_free_result($result);?>
                    <?mysqli_close($mysql);?>

            <br><br>
                
            
</table> <br><br><br><br>
&nbsp;&nbsp;<a href="delete.html" style="text-align: center;">Delete an order</a>
</center>
</section>
<br><br>
<br><br>


</body>
</html>



