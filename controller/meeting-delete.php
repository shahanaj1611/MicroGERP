<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from meeting where meeting_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/meeting-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/meeting-view.php?error=Server Error...");
	}
}
?>