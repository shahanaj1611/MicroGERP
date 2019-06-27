<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$contract_id=$_POST['contract_id'];
	$employee_id=$_POST['employee_id'];
	$buyer_id=$_POST['buyer_id'];
	$product_id=$_POST['product_id'];
  $issue_date=$_POST['issue_date'];
	$deadline=$_POST['deadline'];
	

  
	$sql="update  contract set
	employee_id='$employee_id',
buyer_id='$buyer_id',
product_id='$product_id',
issue_date='$issue_date',
deadline='$deadline'
where contract_id='$contract_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/contract-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>