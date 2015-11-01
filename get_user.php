<?php  
 require "init.php";    
 $email = $_POST["email"];  
 $user_pass = $_POST["password"];  
//echo $email;
//echo $user_pass;
 $sql_query = "SELECT * FROM Users WHERE email = '$email' AND password = '$user_pass';";  
 $result=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($result) > 0) {
 	 $row=mysqli_fetch_assoc($result);
	$fname = $row["first_name"];
	$lname = $row["last_name"];
	$uid = $row["id"];
	$phonenum = $row['phone_number'];
	$email = $row['email'];
    
 echo $uid."-".$fname."-".$lname."-".$email."-".$phonenum;
  //mysqli_free_result($result);
}  



?>
