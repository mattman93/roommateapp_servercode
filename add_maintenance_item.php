<?php  
 require "init.php";  

 $desc = $_POST["desc"];  
 $causingUser = $_POST["causingUser"];  
 $purchaseUser = $_POST["purchaseUser"];  
 $isComplete = $_POST["isComplete"];  
 $groupid = $_GET['groupid'];
  
 $sql_query = "INSERT INTO Maintenance_item(`desc`, causingUser, purchaseUser, isComplete, groupid) VALUES('$item_name', '$quantity', '$dr', '$dp','$ip','$cst','$req_user','$purc_user', '$groupid');";  
 if($con->query($sql_query) === TRUE){
	echo "Maintenance item added";
	} else {
		echo "Error adding Maintenance item";
	}
 ?> 