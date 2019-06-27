<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from working_position where position_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/working_position-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/working_position-view.php?error=Server Error...");
	}
}
?>