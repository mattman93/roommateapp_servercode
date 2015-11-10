<?php  
 require "init.php";  

 $desc = $_POST["desc"];  
 $bill_creator = $_POST["bill_creator"];  
 $assigned_to = $_POST["assigned_to"];  
 $total_amount = $_POST["total_amount"];  
 $groupid = $_POST['groupid'];


 $sql_query = "INSERT INTO Bills(`desc`, bill_creator, assigned_to, amount, group_id) VALUES('$desc', '$bill_creator', '$assigned_to','$total_amount', '$groupid');";  
 if($con->query($sql_query) === TRUE){
	echo "Bill added";
	} else {
		echo "Error adding Bill";
	}
 ?> 