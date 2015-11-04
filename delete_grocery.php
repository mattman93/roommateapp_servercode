<?php  
 require "init.php";  

$grc_id = $_POST["grc_id"];  
 
 $sql_query = "DELETE FROM Grocery_item WHERE id = '$grc_id';";
  
 if($con->query($sql_query) === TRUE){
	echo "Grocery deleted";
	} else {
		echo "Error deleting Grocery";
	}
 ?> 
