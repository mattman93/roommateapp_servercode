<?php  
 require "init.php";    
 $groupid = $_POST["groupid"];  
 $sql_query = "SELECT * FROM Users WHERE group_id = '$groupid' ORDER BY(id) DESC;";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
$users = array();
  while($row = $result->fetch_assoc()){
        $users[] = $row;
    }
	echo json_encode($users);    
} 
?>
