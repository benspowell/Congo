<?php
	$p_id = $_POST["p_id"];
        $base_price = $_POST["base_price"];
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$cmd="update prod_type set base_price = " . $base_price . " where p_id = " . $p_id . ";";
	$result=mysqli_query($con, $cmd) or die(mysqli_error($con));
        echo "<html><body><h1 style='text-align:center'>Processing......</h1></body></html>";
        echo "<script type='text/javascript'>location.href = 'products.php';</script>";
?>