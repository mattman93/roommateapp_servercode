<?php  
 require "init.php";  
 $name = $_POST["email"];  
 $user_name = $_POST["fname"];  
 $user_pass = $_POST["lname"];  
 $sql_query = "INSERT INTO Users(email,first_name,last_name) VALUES('$name','$user_name','$user_pass');";  
 if($con->query($sql_query) === TRUE){
	echo "Registration Success...";
	}
echo $name;
echo $user_name;
echo $user_pass; 
 ?>  
