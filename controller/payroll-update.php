<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$payroll_id=$_POST['payroll_id'];
	$employee_id=$_POST['employee_id'];
	$basic=$_POST['basic'];
  $allowance=$_POST['allowance'];
	$bonus=$_POST['bonus'];
	

  
	$sql="update  payroll set
employee_id='$employee_id',
basic='$basic',
allowance='$allowance',
bonus='$bonus'
where payroll_id='$payroll_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/payroll-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>