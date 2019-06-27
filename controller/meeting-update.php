<?php
if(isset($_POST['submit'])){
	include("../config/db.php");
$meeting_id=$_POST['meeting_id'];
	$buyer_id=$_POST['buyer_id'];
	$meeting_place=$_POST['meeting_place'];
  $date=$_POST['date'];
	$time=$_POST['time'];
	

  
	$sql="update  meeting set
buyer_id='$buyer_id',
meeting_place='$meeting_place',
date='$date',
time='$time'
where meeting_id='$meeting_id'
	";

	$result=mysqli_query($conn,$sql);
	if($result){
		
		header("Location: ../view/meeting-view.php?save=Update Successfull");
	}
	else{
		echo "error";
		echo mysqli_error($conn);
		
	}
}



?>