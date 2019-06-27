<?php
include ("../config/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is Edit</title>
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
			<a href="../index.php"><h2>Batch 38</h2></a>
		</div> <!-- /.logo -->
		<div class="nav">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="../contact.php">Contact</a></li>
				<li><a class="" href="apps.php">Apps</a></li>
				<li><a href="registion.php">Registion</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div> <!-- /.nav -->
	</div> <!--  /.content -->
</div> <!--  /.header -->

<section>
	<div class="main-content">
		<div class="content">
			<div class="registion-form">
				 <h2>Update Now</h2>
				 <?php
$sql = "select * from payroll where payroll_id='". $_GET['ids']."'";
$data = $conn->query($sql);
while($d = $data->fetch_object()) {
?>
				 <form action="../controller/payroll-update.php" method="post">
				 	<input type="hidden" name="payroll_id"  value="<?php echo $d->payroll_id?>"><br>
				 	<label>Employee Id</label><br>
				 	<input type="text" name="employee_id"  value="<?php echo $d->employee_id?>"><br>
				 	<label>basic</label><br>
				 	<input type="text" name="basic"  value="<?php echo $d->basic?>"><br>
				 	
				 	
				 	<label>allowance</label><br>
				 	<input type="text" name="allowance"  value="<?php echo $d->allowance;?>"><br>
					
				 	<label>bonus</label><br>
				 	<input type="text" name="bonus"  value="<?php echo $d->bonus;?>"><br>
				 	<input type="submit" name="submit"  value="Update" "><br>
				 </form>
				<?php
}
				?>
			</div>
		</div> <!-- /.content -->
	</div>
</section>
<footer>
	<div class="footer">
		<p>&copy;Batch38</p>
	</div> <!-- /.footer -->
</footer>
	
</div>
</body>
</html>