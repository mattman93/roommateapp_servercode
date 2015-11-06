<?php  
 require "init.php";  

 $desc = $_POST["desc"];  
 $causingUser = $_POST["causingUser"];  
 $purchaseUser = $_POST["purchaseUser"];  
 $isComplete = $_POST["isComplete"];  
 $groupid = $_POST['groupid'];

 if($isComplete == "true"){
 	$is_c = 1;
 } else {
 	$is_c = 0;
 }
  
 $sql_query = "INSERT INTO Maintenance_item(`desc`, causingUser, purchaseUser, isComplete, groupid) VALUES('$desc', '$causingUser', '$purchaseUser','$is_c', '$groupid');";  
 if($con->query($sql_query) === TRUE){
	echo "Maintenance item added";
	} else {
		echo "Error adding Maintenance item";
	}
 ?> 
