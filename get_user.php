<?php  
 require "init.php";  
 $name = $_POST["user"];  
 $user_name = $_POST["username"];  
 $user_pass = $_POST["password"];  

 $sql_query = "SELECT * FROM Users WHERE user_name = '$user_name' AND user_pass = '$user_pass';";  
 if ($result=mysqli_query($con,$sql_query))
  {
 	if($row=mysqli_fetch_row($result))
    {
    echo $row[0]."-".$row[1]."-".$row[2]."-".$row[3]."-".$row[4]);
    }
  //mysqli_free_result($result);
}  



?>