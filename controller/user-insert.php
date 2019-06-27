<?php
if(isset($_POST['submit'])){
	include("../config/db.php");

	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
    $password=md5($_POST['password']);
     $role=$_POST['role'];
	$mobile=$_POST['mobile'];
	$date=date("Y-m-d");

  
	$sql="insert into registion (fullname,username,password,type,mobile,date) values('$fullname','$username','$password','$role','$mobile','$date')";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/login.php?save=User Name Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>