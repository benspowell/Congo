<?php
	$p_id = $_POST["p_id"];
        $desc = $_POST["desc"];
        $base_price = $_POST["base_price"];
        $curr_price = 0;
        $stock = $_POST["stock"];
	$con = mysqli_connect('localhost','id8126790_root','password','group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
        
	$cmd="insert into prod_type values (" . $p_id . "," . "'" . $desc . "'" . "," . $base_price . "," . $stock . "," . $curr_price . ");";
	$result=mysqli_query($con, $cmd) or die(mysqli_error($con));
        echo "<html><body><h1 style='text-align:center'>Processing......</h1></body></html>";
        echo "<script type='text/javascript'>location.href = 'products.php';</script>";
?>
