<?php  
 require "init.php";  

 $item_name = $_POST["item_name"];  
 $quantity = $_POST["quantity"];  
 $dr = $_POST["dr"];    
 $ip = $_POST['ip']; 
 $cst = $_POST["cst"];  
 $req_user = $_POST["requestUser"];  
 $purc_user = $_POST['purchaseUser'];
 $grc_id = $_POST["grcid"];
 $sql_query = "UPDATE Grocery_item SET item_name = '$item_name', quantity = '$quantity', dateRequested = '$dr', isPurchased = '$ip', cost = '$cst', requestUser = '$req_user', purchaseUser = '$purc_user' WHERE id = '$grc_id';";  
 if($con->query($sql_query) === TRUE){
	echo "Grocery edited";
	} else {
		echo "Error editing Grocery";
	}
 ?> 
