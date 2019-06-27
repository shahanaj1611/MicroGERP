<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from contract where contract_id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/contract-view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/contract-view.php?error=Server Error...");
	}
}
?>