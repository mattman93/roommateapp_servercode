<?php  
 require "init.php";  

 $desc = $_POST["desc"];  
 $bill_creator = $_POST["bill_creator"];  
 $assigned_to = $_POST["assigned_to"];  
 $total_amount = $_POST["total_amount"];  
 $groupid = $_POST['groupid'];

 $sql_query = "UPDATE Bills SET `desc` = '$desc', bill_creator = '$bill_creator', assigned_to = '$assigned_to', amount = '$amount' WHERE id = '$groupid';";  
 if($con->query($sql_query) === TRUE){
	echo "Bill edited";
	} else {
		echo "Error editing Bill";
	}
 ?> 