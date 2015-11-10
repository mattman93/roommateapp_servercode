<?php  
 require "init.php";    
 $groupid = $_POST["groupid"];  
   		 $get_bill_data = "SELECT * FROM Bills WHERE group_id = '$groupid';";
   		 $bill_result=mysqli_query($con,$get_bill_data);
 			if(mysqli_num_rows($bill_result) > 0) {
 				$bill_data = array();
 				while($r = $bill_result->fetch_assoc()){
     	 			  $bill_data[] = $r;
   					 }

		echo json_encode($bill_data);    
	} else {
	echo json_encode("no bill data");
} 



?>
