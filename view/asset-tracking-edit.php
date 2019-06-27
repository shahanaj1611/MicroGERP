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
$sql = "select * from asset_tracking where product_id='". $_GET['ids']."'";
$data = $conn->query($sql);
while($d = $data->fetch_object()) {
?>
				 <form action="../controller/asset-tracking-update.php" method="post">
				 	<input type="hidden" name="product_id"  value="<?php echo $d->product_id?>"><br>
				 	<label>Product Name</label><br>
				 	<input type="text" name="product_name"  value="<?php echo $d->product_name?>"><br>
				 	<label>product_quantity</label><br>
				 	<input type="text" name="product_quantity"  value="<?php echo $d->product_quantity?>"><br>
				 	
				 	
				 	<label>limited_item</label><br>
				 	<input type="text" name="limited_item"  value="<?php echo $d->limited_item;?>"><br>
					
				 	<label>extra_item</label><br>
				 	<input type="text" name="extra_item"  value="<?php echo $d->extra_item;?>"><br>
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