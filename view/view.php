<?php
session_start();
include ("../config/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is view page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="container">
	<!--header -->
	<div class="header"> 
		<div class="content"> 
		<div class="logo">
			<a href="../index.php"><h2>Micro GERP</h2></a>
		</div> <!-- /.logo -->
		<div class="nav">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<?php
			if($_SESSION){
		?>
				
				<li><a href="view.php">View</a></li>
				<li><a href="../apps.php">Apps</a></li>
				<li><a href="../controller/logout.php">Logout</a></li>
				<li><a href="#" style="color:red;"><?php 	echo $_SESSION['username']; ?></a></li>
				<?php
}
				else{
				?>

				<li><a href="registion.php">Registion</a></li>
<li><a href="view/login.php">Login</a></li>
				<?php
}
				?>
				<li><a href="../contactus.php">Contact</a></li>
				
			</ul>
		</div> <!-- /.nav -->
	</div> <!--  /.content -->
</div> <!--  /.header -->

<section>
	<div class="main-content">
		<div class="content">
			<div class="">
			<center>
				 <h2>View</h2>
				 <h3>
				 <ul>
				<li><a href="asset-tracking-view.php" style="color:grey;">Asset Tracking</a></li>
				<li><a class="" href="ordering-view.php"style="color:grey;">Ordering</a></li>
				<li><a class="" href="bill-view.php" style="color:grey;">Bill</a></li>
				<li><a href="buyer-info-view.php" style="color:grey;">Buyer Information</a></li>
				<li><a href="meeting-view.php" style="color:grey;">Meeting</a></li>
				<li><a href="contract-view.php" style="color:grey;">Contract</a></li>
				<li><a href="personal_info-view.php" style="color:grey;">Personal Information</a></li>
				<li><a href="working_position-view.php" style="color:grey;">Working Postion</a></li>
				<li><a href="contact-view.php" style="color:grey;">Contact</a></li>
				<li><a href="payroll-view.php" style="color:grey;">Payroll</a></li>
			</ul>
			</h3>
			</center>
						</div>
		</div> <!-- /.content -->
	</div>
</section>
<br>
<br>
<footer>
	<div class="footer">
		<p>&copy;Micro GERP</p>
	</div> <!-- /.footer -->
</footer>
	
</div>
</body>
</html>
