<html>
    <head>
        <title>Shipments</title>  
        <link href="style.css" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <nav>
            <a href="../index.php"><img src="congo-logo.png"></a>
            <a class="navElement" href="customers.php">Customers</a>
            <a class="navElement" href="orders.php">Orders</a>
            <a class="navElement" href="products.php">Products</a>
            <a id="current" class="navElement" href="shipments.php">Shipments</a>
            <a class="navElement" href="shop.php">Shop</a>
        </nav>  
        <div>
    <h1>Shipments</h1>
        <table style="border: 1px solid black">
        <tr>
            <th>Shipment ID</th>
            <th>Date</th>
            <th>Product ID</th>
            <th>Quantity</th>
        </tr>
        <?php
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$select="select * from shipment left join shipment_li on shipment.s_id=shipment_li.s_id;";
	$result=mysqli_query($con, $select) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_date'] . "</td>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "</tr>";
        }
        ?>
        </table>
        <h3>Add Shipment</h3>
        <form action="add_shipment.php" method="post">
        Shipment ID<input type="number" name="s_id">
        <?php
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$select="select * from prod_type";
	$result=mysqli_query($con, $select) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
                echo "<h2>".$row['description']."</h2>";
                echo "Product ID<input type='text' name='".$row['p_id']."' value='".$row['p_id']."' readonly><br>";
                echo "Quantity<input name='".$row['p_id']."_qty' type='number' placeholder='0'><br>";
        }
        ?>
            <input type='submit'>
        </form>
        </div>
    </body>
</html>