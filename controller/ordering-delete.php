<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from ordering where ordering_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/ordering-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/ordering-view.php?error=Server Error...");
	}
}
?>