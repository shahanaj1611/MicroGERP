<?php
if(isset($_POST['working_position'])){
	include("../config/db.php");

	$employee_id=$_POST['employee_id'];
	$department=$_POST['department'];
    $position=$_POST['position'];
	$working_hour=$_POST['working_hour'];
	$working_zone=$_POST['working_zone'];

  
	$sql="insert into working_position (employee_id,department,position,working_hour,working_zone) values('$employee_id','$department','$position','$working_hour','$working_zone')";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		echo "successfully data insert";
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>