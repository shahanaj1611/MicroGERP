<?php

if(isset($_GET["ids"])){
	include ("../config/db.php");

$sql = "delete from registion where id = '". $_GET['ids']."'";
	if($conn->query($sql)){
header("Location: ../view/view.php?save=Delete Successfull");

	}
	else{
		header("Location: ../view/view.php?error=Server Error...");
	}
}
?>