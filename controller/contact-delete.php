<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from contact where contact_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/contact-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/contact-view.php?error=Server Error...");
	}
}
?>