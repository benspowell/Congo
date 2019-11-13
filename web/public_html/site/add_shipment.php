<?php
	$s_id = $_POST["s_id"];
        $datetime = date("Y-m-d H:i:s");
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
        $cmd="select * from prod_type;";
	$result=mysqli_query($con, $cmd) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
            $p_id=$row['p_id']; 
            $qty=$_POST[$p_id."_qty"];
            if ($qty!=0){
            $cmd2="insert into shipment_li values (" . $qty . ",'" . $s_id . "','".$p_id."');";
            $result2=mysqli_query($con, $cmd2) or die(mysqli_error($con));
            }
        }
        $cmd="insert into shipment values ('" . $s_id . "','".$datetime . "');";
        $result=mysqli_query($con, $cmd) or die(mysqli_error($con));
        echo "<html><body><h1 style='text-align:center'>Processing......</h1></body></html>";
        echo "<script type='text/javascript'>location.href = 'shipments.php';</script>";
?>