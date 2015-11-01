<?php  
 require "init.php";    
 $groupid = $_POST["groupid"];  

 $sql_query = "SELECT * FROM Chores WHERE groupid = '$groupid';";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
 	 while($row = mysql_fetch_assoc($result)){
        $chores[] = array(
          'id' => $row['id'],
          'name' => $row['name'],
          'desc' => $row['desc'],
          'assigned_to' => $row['assigned_to'],
          'point_val' => $row['point_val'],
          'posted_by' => $row['posted_by'],
          'completed_by' => $row['completed_by'],
          'groupid' => $row['groupid'],
          );
    }

    foreach ($chores as $chores) {
    	echo json_encode($chore);
	}  
?>