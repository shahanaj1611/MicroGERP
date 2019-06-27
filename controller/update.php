<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$id=$_POST['id'];
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
  
	$mobile=$_POST['mobile'];
	

  
	$sql="update  registion set
fullname='$fullname',
username='$username',
mobile='$mobile'
where id='$id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>