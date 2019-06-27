<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is app page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<!--header -->
	<div class="header"> 
		<div class="content"> 
		<div class="logo">
			<a href="index.php"><h2>MicroGerp</h2></a>
		</div> <!-- /.logo -->
		<div class="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				
			<?php
			if($_SESSION){
		?>
				<li><a class="" href="apps.php">Apps</a></li>
				<li><a href="view.php">View</a></li>
				<li><a href="controller/logout.php">Logout</a></li>
				<li><a href="#" style="color:red;"><?php 	echo $_SESSION['username']; ?></a></li>
				<?php
}
				else{
				?>

				<li><a href="view/registion.php">Registration</a></li>
<li><a href="view/login.php">Login</a></li>
				<?php
}
				?>

				<li><a href="contactus.php">Contact</a></li>
				

			</ul>
		</div> <!-- /.nav -->
	</div> <!--  /.content -->
</div> <!--  /.header -->
<div class="slider">
	<img src="img/erp1.jpg" alt="erp1">
</div> <!-- /.slider -->
<body>

<div class="">
<br>
<br>
<center>
<h1>GERP APPS</h1>
<br>
<br>
			<b>
			<ul>
				<li><a class="" href="hr.php" style="color:grey;"><h3>Human Resource Management System<h3></a></li>
				<li><a class="" href="sales.php" style="color:grey;"><h3>Sales</h3></a></li>
				<li><a class="" href="inventory.php" style="color:grey;"><h3>Inventory</h3></a></li>
			</ul>
			</b></center>
		</div>
		<br>
<div>
</div>
<footer>
	<div class="footer">
		<p>&copy;MicroGERP</p>
	</div> <!-- /.footer -->
</footer>
</body>
</html>