<?php
session_start();
if(isset($_POST['submit'])){
	include("../config/db.php");

	
	$username=$_POST['username'];
    $password=md5($_POST['password']);

	 $sql = "select * from registion where username='" . $username . "' and password='" . $password . "'";
            $result = mysqli_query($conn,$sql);
            $records = mysqli_num_rows($result);
           // $row = mysqli_fetch_array($result);
            if ($records > 0) {
                while($row = mysqli_fetch_array($result)){
                	$_SESSION['myid']=$row['id'];
                	$_SESSION['username']=$row['username'];
                	header("Location: ../index.php");

                }

}else{
		header("Location: ../view/login.php?error=UserName OR Password Wrong");
	

}

}

?>