<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$buyer_id=$_POST['buyer_id'];
	$product_id=$_POST['product_id'];
	$buyer_name=$_POST['buyer_name'];
  $company_address=$_POST['company_address'];
	$purchase_quantity=$_POST['purchase_quantity'];
	

  
	$sql="update  buyer_info set
product_id='$product_id',
buyer_name='$buyer_name',
company_address='$company_address',
purchase_quantity='$purchase_quantity'
where buyer_id='$buyer_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/buyer-info-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>