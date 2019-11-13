<html>
    <head>
        <title>Orders</title>  
        <link href="style.css" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <nav>
            <a href="../index.php"><img src="congo-logo.png"></a>
            <a class="navElement" href="customers.php">Customers</a>
            <a  id="current"  class="navElement" href="orders.php">Orders</a>
            <a class="navElement" href="products.php">Products</a>
            <a class="navElement" href="shipments.php">Shipments</a>
            <a class="navElement" href="shop.php">Shop</a>
        </nav> 
        <div>
    <h1>Orders</h1>
        <table style="border: 1px solid black;">
        <tr>
            <th>Order ID</th>
            <th>Date</th>
            <th>Customer ID</th>
            <th>Total</th>
            <th>Product ID</th>
            <th>Unit Price</th>
            <th>Quantity</th>
        </tr>
        <?php
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$select="select * from orders left join order_li on orders.o_id=order_li.o_id;";
	$result=mysqli_query($con, $select) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['o_id'] . "</td>";
                echo "<td>" . $row['o_date'] . "</td>";
                echo "<td>" . $row['cust_id'] . "</td>";
                echo "<td>" . $row['total'] . "</td>";
                echo "<td>" . $row['prod_id'] . "</td>";
                echo "<td>" . $row['unit_price'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "</tr>";
        }
        ?>
        </table>
        </div>
    </body>
</html>