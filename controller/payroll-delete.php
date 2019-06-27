<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from payroll where payroll_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/payroll-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/payroll-view.php?error=Server Error...");
	}
}
?>