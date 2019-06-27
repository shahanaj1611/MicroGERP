<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from asset_tracking where product_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/asset-tracking-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/asset-tracking-view.php?error=Server Error...");
	}
}
?>