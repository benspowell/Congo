<html>
    <head>
        <title>Products</title>  
        <link href="style.css" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <nav>
            <a href="../index.php"><img src="congo-logo.png"></a>
            <a class="navElement" href="customers.php">Customers</a>
            <a class="navElement" href="orders.php">Orders</a>
            <a id="current" class="navElement" href="products.php">Products</a>
            <a class="navElement" href="shipments.php">Shipments</a>
            <a class="navElement" href="shop.php">Shop</a>
        </nav>
        <div>
        <h1>Products</h1>
        <table style="border: 1px solid black">
        <tr>
            <th>Product ID</th>
            <th>Description</th>
            <th>Base Price</th>
            <th>Current Price</th>
            <th>Stock</th>
        </tr>
        <?php
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$select="select * from prod_type";
	$result=mysqli_query($con, $select) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['base_price'] . "</td>";
                echo "<td>" . $row['curr_price'] . "</td>";
                echo "<td>" . $row['stock'] . "</td>";
                echo "</tr>";
        }
        ?>
        </table>
        <h3>Add Product</h3>
        <form action="add_product.php" method="post">
            Product ID: <input name="p_id" type="text"><br>
            Description: <input name="desc" type="text"><br>
            Base Price: <input name="base_price" type="text"><br>
            Stock: <input name="stock" type="number"><br>
        <input type="submit">
        </form>
        <h3>Change Price</h3>
        <form action="change_base_price.php" method="post">
            Product ID: <input name="p_id" type="text"><br>
            New Base Price: <input name="base_price" type="text"><br>
        <input type="submit">
        </form>
        </div>
    </body>
</html>