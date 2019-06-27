<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$contact_id=$_POST['contact_id'];
	$employee_id=$_POST['employee_id'];
	$work_address=$_POST['work_address'];
  $email=$_POST['email'];
	$mobile=$_POST['mobile'];
	

  
	$sql="update  contact set
employee_id='$employee_id',
work_address='$work_address',
email='$email',
mobile='$mobile'
where contact_id='$contact_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/contact-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>