<?php
if(isset($_POST['contract'])){
	include("../config/db.php");

$employee_id=$_POST['employee_id'];
	$buyer_id=$_POST['buyer_id'];
	$product_id=$_POST['product_id'];
    $issue_date=$_POST['issue_date'];
	$deadline=$_POST['deadline'];

  
	$sql="insert into contract (employee_id,buyer_id,product_id,issue_date,deadline) values('employee_id','$buyer_id','$product_id','$issue_date','$deadline')";

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