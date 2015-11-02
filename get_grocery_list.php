<?php  
 require "init.php";    
 $groupid = $_POST["groupid"];  
 $sql_query = "SELECT * FROM Grocery_item WHERE groupid = '$groupid' ORDER BY(id) DESC;";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
$chores = array();
  while($row = $result->fetch_assoc()){
        $Groceries[] = $row;
    }

	echo json_encode($chores);    
//print_r($chores);
} 
?>