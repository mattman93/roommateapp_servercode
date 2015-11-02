<?php  
 require "init.php";  

$title = $_POST["title"];
$desc = $_POST["desc"];
$requestUser = $_POST["requestUser"];
$assignedUser = $_POST["assignedUser"];
$choreid = $_POST["choreid"];  
 
 $sql_query = "UPDATE Chores SET name = '$title', `desc` = '$desc', assigned_to = '$assignedUser', posted_by = '$requestUser' WHERE id = '$choreid';";
  
 if($con->query($sql_query) === TRUE){
	echo "Chore edited";
	} else {
		echo "Error editing chore";
	}
 ?> 
