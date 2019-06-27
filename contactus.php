<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is home page</title>
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
	<img src="img/contactus.jpg" alt="contactus">
</div> <!-- /.slider -->
<body>



<br>
<br>
<center>
<h1>
Contact with:<br><br>
Phone Number--
<br><br>
1. 01790103707
<br>
2. 0136565965
<br>
<br>
Email--
<br><br>
1.spf1243@gmail.com
<br>
2.pf1234@gmail.com
</h1>
</center>
<br>
<br>
</body>
</html>
<footer>
	<div class="footer">
		<p>&copy;MicroGERP</p>
	</div> <!-- /.footer -->
</footer>
</body>
</html>