<?php  
 require "init.php";  

 $title = $_POST["title"];  
 $desc = $_POST["desc"];  
 $requestUser = $_POST["requestUser"];  
 $assignedUser = $_POST["assignedUser"];  
 $groupid = $_POST['groupid'];
  
 $sql_query = "INSERT INTO Chores(name,`desc`,assigned_to,posted_by, groupid) VALUES('$title','$desc',' $assignedUser','$requestUser','$groupid');";  
 if($con->query($sql_query) === TRUE){
	echo "Chore added";
	} else {
		echo "Error adding chore";
	}
 ?> 
