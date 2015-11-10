<?php  
 require "init.php";    
 $groupid = $_POST["groupid"];  
 $sql_query = "SELECT * FROM Announcements WHERE groupid = '$groupid' LIMIT 1";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
 	 
	$ann_data = array();
  		while($row = $result->fetch_assoc()){
     	   $ann_data[] = $row;
   		 }
		echo json_encode($ann_data);    
	}  



?>