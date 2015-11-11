<?php  
 require "init.php";  

 $desc = $_POST["desc"];  
 $causingUser = $_POST["causingUser"];  
 $purchaseUser = $_POST["purchaseUser"];  
 $isComplete = $POST["isComplete"]; 
$id = $_POST['id'];
 

 $sql_query = "UPDATE Maintenance_item SET `desc` = '$desc', causingUser = '$causingUser', purchaseUser = '$purchaseUser', isComplete = '$isComplete' WHERE id = '$id';";  
 if($con->query($sql_query) === TRUE){
	echo "Maintenance item edited";
	} else {
		echo "Error editing Maintenance item";
	}
 ?> 
