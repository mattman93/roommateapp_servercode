<?php  
 require "init.php";  
 $name = $_POST["user"];  
 $user_name = $_POST["user_name"];  
 $user_pass = $_POST["user_pass"];  
 $sql_query = "INSERT INTO user_info(name,user_name,user_pass) VALUES('$name','$user_name','$user_pass');";  
 if($con->query($sql_query) === TRUE){
	echo "Registration Success...";
	} 
 ?>  
