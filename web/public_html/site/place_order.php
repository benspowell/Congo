<?php
	$o_id = $_POST["o_id"];
        $cust_id = $_POST["cust_id"];
        $datetime = date("Y-m-d H:i:s");
        $total=0;
	$con = mysqli_connect('localhost','id8126790_root','password','id8126790_group_project');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
        $cmd="select * from prod_type;";
	$result=mysqli_query($con, $cmd) or die(mysqli_error($con));
	While ( $row = $result->fetch_assoc()){
            $p_id=$row['p_id']; 
            $price=$_POST[$p_id."_price"];
            $qty=$_POST[$p_id."_qty"];
            if ($qty!=0){
            $cmd2="insert into order_li values ('" . $o_id . "','" . $p_id . "'," . $price . ",".$qty.");";
            $result2=mysqli_query($con, $cmd2) or die(mysqli_error($con));
            $total=$total+($price*$qty);
            }
        }
        $cmd="insert into orders values (" . $o_id . ",".$total."," . $cust_id . ",'" . $datetime . "');";
        $result=mysqli_query($con, $cmd) or die(mysqli_error($con));
        echo "<html><body><h1 style='text-align:center'>Thanks for your order!<br><a href='../index.php'>Return to Home</a></h1></body></html>";
?>
