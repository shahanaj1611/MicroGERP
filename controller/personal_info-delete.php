<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from personal_info where employee_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/personal_info-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/personal_info-view.php?error=Server Error...");
	}
}
?>