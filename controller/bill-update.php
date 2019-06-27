<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$bill_id=$_POST['bill_id'];
	$ordering_id=$_POST['ordering_id'];
	$cost=$_POST['cost'];
  $paid=$_POST['paid'];
	$due=$_POST['due'];
	

  
	$sql="update  bill set
ordering_id='$ordering_id',
cost='$cost',
paid='$paid',
due='$due'
where bill_id='$bill_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/bill-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>