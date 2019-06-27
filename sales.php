<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is sales page</title>
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
<h1>sales System</h1><br><br>
<h3>
			<ul>				
				<li><a class="" href="meeting.php">Meeting</a></li>
				<li><a class="" href="contract.php">Contract</a></li>
				<li><a class="" href="ordering.php">Order</a></li>
				<li><a class="" href="bill.php">Bill</a></li>
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