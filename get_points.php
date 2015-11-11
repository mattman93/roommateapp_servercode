<?php  
 require "init.php";    
 $groupid = $_POST["groupid"];  
 $sql_query = "SELECT Points,first_name FROM Users WHERE group_id = '$groupid'";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
$user_points = array();
  while($row = $result->fetch_assoc()){
        $user_points[] = $row;
    }
	echo json_encode($user_points);    
} 
?>