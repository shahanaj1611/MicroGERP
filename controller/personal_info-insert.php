<?php
if(isset($_POST['personal_info'])){
	include("../config/db.php");

	$nid=$_POST['nid'];
	

  
	$sql="insert into personal_info (nid) values('$nid')";

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