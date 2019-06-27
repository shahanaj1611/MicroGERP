<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from buyer_info where buyer_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/buyer-info-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/buyer-info-view.php?error=Server Error...");
	}
}
?>