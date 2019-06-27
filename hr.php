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
				<li><a href="view/logged_view.php">View</a></li>
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

				<li><a href="contact.html">Contact</a></li>
				

			</ul>
		</div> <!-- /.nav -->
	</div> <!--  /.content -->
</div> <!--  /.header -->
<body>

<div class="">
<center>
<h1>Human Resource System</h1><br><br>
<h3>
			<ul>				
				<li><a class="" href="work_info.php" style="color:grey;">Work Information</a></li>
				<li><a class="" href="personal_info.php" style="color:grey;">Personal Information</a></li>
				<li><a class="" href="payroll.php" style="color:grey;">Payroll</a></li>
			</ul>
		</div>
</h3></center>
</body>
<br>
<br>
<footer>
	<div class="footer">
		<p>&copy;Micro GERP</p>
	</div> <!-- /.footer -->
</footer>
</html>