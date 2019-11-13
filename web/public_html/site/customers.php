<html>
    <head>
        <title>Customers</title>  
        <link href="style.css" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <nav>
            <a href="../index.php"><img src="congo-logo.png"></a>
            <a id="current" class="navElement" href="customers.php">Customers</a>
            <a class="navElement" href="orders.php">Orders</a>
            <a class="navElement" href="products.php">Products</a>
            <a class="navElement" href="shipments.php">Shipments</a>
            <a class="navElement" href="shop.php">Shop</a>
        </nav>    
        <div>
    <h1>Customers</h1>
        <table style="border: 1px solid black">
        <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <?php
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$select="select * from customer";
	$result=mysqli_query($con, $select) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['cust_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
        }
        ?>
        </table>
        <h3>Add Customer</h3>
        <form action="add_customer.php" method="post">
            Customer ID: <input name="cust_id" type="text"><br>
            Name: <input name="name" type="text"><br>
            Address: <input name="address" type="text"><br>
            Phone: <input name="phone" type="number"><br>
            Email: <input name="email" type="text"><br>
        <input type="submit">
        </form>
        </div>
    </body>
</html>