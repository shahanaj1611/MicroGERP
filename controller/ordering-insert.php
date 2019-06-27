<?php
if(isset($_POST['ordering'])){
	include("../config/db.php");

	$product_id=$_POST['product_id'];
	$ordering_item=$_POST['ordering_item'];
    $ordering_date=$_POST['ordering_date'];
	$arrival_date=$_POST['arrival_date'];

  
	$sql="insert into ordering (product_id,ordering_item,ordering_date,arrival_date) values('$product_id','$ordering_item','$ordering_date','$arrival_date')";

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