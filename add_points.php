<?php  
 require "init.php";  
 $username = $_POST["username"]; 
 $point_amount = $_POST['points']; 
 $get_curr_points = "SELECT Points FROM Users WHERE first_name = '$username';";
 	 $res=mysqli_query($con,$get_curr_points);
 		if(mysqli_num_rows($res) > 0) {
 			$row = $res->fetch_assoc();
        	$points = $row['Points'];
     $new_point_total = $point_amount + $points;
$sql_query = "UPDATE Users SET Points = '$new_point_total' WHERE first_name = '$username';";  
 if($con->query($sql_query) === TRUE){
	echo "Points modified";
	} else {
		echo "Error modifying points";
	}
}
 ?> 
