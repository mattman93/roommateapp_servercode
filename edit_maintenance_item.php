<?php  
 require "init.php";  

 $desc = $_POST["desc"];  
 $causingUser = $_POST["causingUser"];  
 $purchaseUser = $_POST["purchaseUser"];  
 $isComplete = $POST["isComplete"];  
 $groupid = $_POST['groupid'];

 if($isComplete == "true"){
 	$is_c = 1;
 } else {
 	$is_c = 0;
 }

 $sql_query = "UPDATE Maintenance_item SET `desc` = '$desc', causingUser = '$causingUser', purchaseUser = '$purchaseUser', isComplete = '$is_c' WHERE id = '$groupid';";  
 if($con->query($sql_query) === TRUE){
	echo "Maintenance item edited";
	} else {
		echo "Error editing Maintenance item";
	}
 ?> 
