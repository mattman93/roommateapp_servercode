<?php  
 require "init.php";    
 $groupid = $_POST["groupid"];  
 $sql_query = "SELECT * FROM Maintenance_item WHERE groupid = '$groupid' ORDER BY(id) DESC;";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
$ml = array();
  while($row = $result->fetch_assoc()){
        $ml[] = $row;
    }
	echo json_encode($ml);    
//print_r($chores);
} 
?>