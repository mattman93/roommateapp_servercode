<?php  
 require "init.php";  

 $desc = $_POST["content"];  
 $poster = $_POST["poster"];   
 $groupid = $_POST['groupid'];
 $today = date("m-d-y"); 
  
 $sql_query = "INSERT INTO Announcements(Message, usersName, groupId, DatePosted) VALUES('$desc', '$poster', '$groupid','$today');";  
 if($con->query($sql_query) === TRUE){
	echo "Announcement added";
	} else {
		echo "Error adding Announcement";
	}
 ?> 