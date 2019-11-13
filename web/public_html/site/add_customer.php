<?php
	$cust_id = $_POST["cust_id"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$cmd="insert into customer values (" . $cust_id . ",'" . $name . "','" . $address . "','" . $email . "'," . $phone . ");";
	$result=mysqli_query($con, $cmd) or die(mysqli_error($con));
        echo "<html><body><h1 style='text-align:center'>Processing......</h1></body></html>";
        echo "<script type='text/javascript'>location.href = 'customers.php';</script>";
?>
