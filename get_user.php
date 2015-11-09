<?php  
 require "init.php";    
 $dev_id = $_POST["deviceid"];  
 $sql_query = "SELECT * FROM Users WHERE DeviceId = '$dev_id' LIMIT 1";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
 	 
	$user_data = array();
  		while($row = $result->fetch_assoc()){
     	   $user_data[] = $row;
   		 }
		echo json_encode($user_data);    
	}  



?>
