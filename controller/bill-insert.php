<?php
if(isset($_POST['bill'])){
	include("../config/db.php");

	$ordering_id=$_POST['ordering_id'];
	$cost=$_POST['cost'];
    $paid=$_POST['paid'];
	$due=$_POST['due'];

  
	$sql="insert into bill (ordering_id,cost,paid,due) values('$ordering_id','$cost','$paid','$due')";

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