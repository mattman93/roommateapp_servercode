<?php  
 require "init.php";    
 $dev_id = $_POST["groupid"];  
 $sql_query = "SELECT * FROM Users INNER JOIN Groups ON id = '$groupid' INNER JOIN Bills ON group_id = '$groupid'";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
 	 
	$group_data = array();
  		while($row = $result->fetch_assoc()){
     	   $group_data[] = $row;
   		 }
		echo json_encode($group_data);    
	}  



?>