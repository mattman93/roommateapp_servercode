<?php  
 require "init.php";  
 $name = $_POST["user"];  
 $user_name = $_POST["user_name"];  
 $user_pass = $_POST["user_pass"];  
 $sql_query = "INSERT INTO user_info values('$name','$user_name','$user_pass');";  
  mysqli_query($con,$sql_query); 
 ?>  