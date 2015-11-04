<?php  
 require "init.php";  

 $item_name = $_POST["item_name"];  
 $quantity = $_POST["quantity"];  
 $dr = $_POST["dr"];  
 $dp = $_POST["dp"];  
 $ip = $_POST['ip']; 
 $cst = $_POST["cst"];  
 $req_user = $_POST["requestUser"];  
 $purc_user = $_POST['purchaseUser'];
 $groupid = $_POST['groupid'];
  
 $sql_query = "INSERT INTO Grocery_item(item_name, quantity, dateRequested, datePurchased, isPurchased, cost, requestUser, purchaseUser, groupid) VALUES('$item_name', '$quantity', '$dr', '$dp','$ip','$cst','$req_user','$purc_user', '$groupid');";  
 if($con->query($sql_query) === TRUE){
	echo "Grocery added";
	} else {
		echo "Error adding Grocery";
	}
 ?> 
