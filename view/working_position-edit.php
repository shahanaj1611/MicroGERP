<?php
session_start();
include ("../config/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is edit page</title>
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
			<div class="registion-form">
				 <h2>Update Now</h2>
				 <?php
$sql = "select * from working_position where position_id='". $_GET['ids']."'";
$data = $conn->query($sql);
while($d = $data->fetch_object()) {
?>
				 <form action="../controller/working_position-update.php" method="post">
				 	<input type="hidden" name="position_id"  value="<?php echo $d->position_id?>"><br>
				 	<label>Employee Id</label><br>
				 	<input type="text" name="employee_id"  value="<?php echo $d->employee_id?>"><br>
				 	<label>department</label><br>
				 	<input type="text" name="department"  value="<?php echo $d->department?>"><br>
				 	
				 	
				 	<label>position</label><br>
				 	<input type="text" name="position"  value="<?php echo $d->position;?>"><br>
					
				 	<label>working_hour</label><br>
				 	<input type="text" name="working_hour"  value="<?php echo $d->working_hour;?>"><br>
					
				 	<label>working_zone</label><br>
				 	<input type="text" name="working_zone"  value="<?php echo $d->working_zone;?>"><br>
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
		<p>&copy;Micro GERP</p>
	</div> <!-- /.footer -->
</footer>
	
</div>
</body>
</html>