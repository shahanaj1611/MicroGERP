<?php
if(isset($_POST['asset_tracking'])){
	include("../config/db.php");

	$product_name=$_POST['product_name'];
	$product_quantity=$_POST['product_quantity'];
    $limited_item=$_POST['limited_item'];
	$extra_item=$_POST['extra_item'];

  
	$sql="insert into asset_tracking (product_name,product_quantity,limited_item,extra_item) values('$product_name','$product_quantity','$limited_item','$extra_item')";

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