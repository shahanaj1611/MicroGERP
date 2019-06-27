<?php
if(isset($_POST['submit'])){
	include("../config/db.php");

	$employee_id=$_POST['employee_id'];
	$basic=$_POST['basic'];
    $allowance=$_POST['allowance'];
	$bonus=$_POST['bonus'];


  $total=$basic+$allowance+$bonus;
 
	$sql="insert into payroll (employee_id,basic,allowance,bonus,total) values('$employee_id','$basic','$allowance','$bonus','$total')";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		echo "successfully data insert";
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
	 	header("Location: ../view/payroll-view.php");
}



?>