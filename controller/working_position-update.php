<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$position_id=$_POST['position_id'];
	$employee_id=$_POST['employee_id'];
	$department=$_POST['department'];
	$position=$_POST['position'];
	$working_hour=$_POST['working_hour'];
	$working_zone=$_POST['working_zone'];
	
	

  
	$sql="update  working_position set
employee_id='$employee_id',
department='$department',
position='$position',
working_hour='$working_hour',
working_zone='$working_zone'

where position_id='$position_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/working_position-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>