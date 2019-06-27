<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is view page</title>
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
			<a href="../index.php"><h2>Micro GERP</h2></a>
		</div> <!-- /.logo -->
		<div class="nav">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<?php
			if($_SESSION){
		?>
				
				<li><a href="view.php">View</a></li>
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
				<li><a href="contactus.php">Contact</a></li>
				
			</ul>
		</div> <!-- /.nav -->
	</div> <!--  /.content -->
</div> <!--  /.header -->

<section>
	<div class="main-content">
		<div class="content">
			<div class=""><center>
				 <h2>View</h2>
				 <ul>
				 <h3>
				<li><a href="view/logged_view.php" style="color:grey;">Employee Data</a></li>
				<li><a class="" href="view/view.php" style="color:grey;">Product Data</a></li>
				</h3>
			</ul>
					</center>	</div>
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
