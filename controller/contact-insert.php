<?php
if(isset($_POST['contact'])){
	include("../config/db.php");

	$employee_id=$_POST['employee_id'];
	$work_address=$_POST['work_address'];
    $email=$_POST['email'];
	$mobile=$_POST['mobile'];

  
	$sql="insert into contact (employee_id,work_address,email,mobile) values('$employee_id','$work_address','$email','$mobile')";

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