<?php
if(isset($_POST['meeting'])){
	include("../config/db.php");

	$buyer_id=$_POST['buyer_id'];
	$meeting_place=$_POST['meeting_place'];
	$date=$_POST['date'];
    $time=$_POST['time'];
	

  
	$sql="insert into meeting (buyer_id,meeting_place,date,time) values('$buyer_id','meeting_place','$date','$time')";

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