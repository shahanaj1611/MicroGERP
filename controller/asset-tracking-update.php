<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$product_id=$_POST['product_id'];
	$product_name=$_POST['product_name'];
	$product_quantity=$_POST['product_quantity'];
  $limited_item=$_POST['limited_item'];
	$extra_item=$_POST['extra_item'];
	

  
	$sql="update  asset_tracking set
product_name='$product_name',
product_quantity='$product_quantity',
limited_item='$limited_item',
extra_item='$extra_item'
where product_id='$product_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/asset-tracking-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>