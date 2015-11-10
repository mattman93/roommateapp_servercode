<?php  
 require "init.php";  

$bill_id = $_POST["bill_id"];  
 
 $sql_query = "DELETE FROM Billd WHERE id = '$bill_id';";
  
 if($con->query($sql_query) === TRUE){
	echo "Bill deleted";
	} else {
		echo "Error deleting Bill";
	}
 ?> 