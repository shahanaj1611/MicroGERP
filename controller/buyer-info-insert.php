<?php
if(isset($_POST['buyer_info'])){
	include("../config/db.php");

	$product_id=$_POST['product_id'];
	$buyer_name=$_POST['buyer_name'];
    $company_address=$_POST['company_address'];
	$purchase_quantity=$_POST['purchase_quantity'];

  
	$sql="insert into buyer_info (product_id,buyer_name,company_address,purchase_quantity) values('$product_id','$buyer_name','$company_address','$purchase_quantity')";

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