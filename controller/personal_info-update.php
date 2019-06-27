<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$employee_id=$_POST['employee_id'];
	$nid=$_POST['nid'];
	
	

  
	$sql="update  personal_info set
nid='$nid'

where employee_id='$employee_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/personal_info-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>