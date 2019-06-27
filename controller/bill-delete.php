<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from bill where bill_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/bill-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/bill-view.php?error=Server Error...");
	}
}
?>