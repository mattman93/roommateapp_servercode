<?php  
 require "init.php";  

$mntc_id = $_POST["mntc_id"];  
 
 $sql_query = "DELETE FROM Maintenance_item WHERE id = '$mntc_id';";
  
 if($con->query($sql_query) === TRUE){
	echo "Maintenance item deleted";
	} else {
		echo "Error deleting Maintenance item";
	}
 ?> 