<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$ordering_id=$_POST['ordering_id'];
	$product_id=$_POST['product_id'];
	$ordering_item=$_POST['ordering_item'];
  $ordering_date=$_POST['ordering_date'];
	$arrival_date=$_POST['arrival_date'];
	

  
	$sql="update  ordering set
product_id='$product_id',
ordering_item='$ordering_item',
ordering_date='$ordering_date',
arrival_date='$arrival_date'
where ordering_id='$ordering_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/ordering-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>