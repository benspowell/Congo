<html>
<head>
<title>SHOP</title>
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
            <a class="navElement" href="shipments.php">Shipments</a>
            <a id="current" class="navElement" href="shop.php">Shop</a>
        </nav>    
    <div>
    <h1>Shop</h1>
        <form action="place_order.php" method="post">
        Customer ID
            <input type="number" name="cust_id">
            Order ID
            <input type="number" name="o_id">
        <?php
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$select="select * from prod_type";
	$result=mysqli_query($con, $select) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
                echo "<h2>".$row['description']."</h2>";
                echo $row['stock']." in stock<br>";
                echo "Product ID<input type='text' name='".$row['p_id']."' value='".$row['p_id']."' readonly><br>";
                echo "Price<input type='text' name='".$row['p_id']."_price' value='".$row['curr_price']."' readonly><br>";
                echo "Quantity<input name='".$row['p_id']."_qty' type='number' placeholder='0'><br>";
        }
        ?>
        <input type='submit'>
    </form>
    </div>
    </body>
</html>