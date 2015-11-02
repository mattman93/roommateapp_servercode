<?php  
 require "init.php";  

$choreid = $_POST["choreid"];  
 
 $sql_query = "DELETE FROM Chores WHERE id = '$choreid';";
  
 if($con->query($sql_query) === TRUE){
	echo "Chore deleted";
	} else {
		echo "Error deleting chore";
	}
 ?> 