<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is asset_tracking page</title>
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


<section>
	<div class="main-content">
		<div class="content">
			<div class="registion-form">
				 <h2>Insert Data</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="controller/asset-tracking-insert.php" onsubmit="return valiform()">

							<div class="form-group">
								<label for="product_name" >Your Product Name</label>
								<input type="text" id="product_name" name="product_name" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="product_quantity" >Product Quantity</label>
								<input type="text" id="product_quantity" name="product_quantity" class="form-control" />
							</div>

							<div class="form-group">
								<label for="limited_item" >Limited Item </label>
								<input type="text" id="limited_item" name="limited_item" class="form-control" />
							</div>

							<div class="form-group">
								<label for="extra_item" >Extra Item</label>
								<input type="text" id="extra_item" name="extra_item" class="form-control"/>
							</div>

							<button type="submit" name="asset_tracking" class="btn btn-success">submit</button>
						</form>
					</div>
		</div> <!-- /.content -->
	</div>
</section>
<footer>
	<div class="footer">
		<p>&copy;MicroGERP</p>
	</div> <!-- /.footer -->
</footer>
	
</div>

<script>
    function valiform() {
   
        var product_name = document.sform.product_name.value;
        var product_quantity = document.sform.product_quantity.value;
		var limited_item = document.sform.limited_item.value;
        var extra_item = document.sform.extra_item.value;
        var status = false;

      
         if (product_name == null || product_name == "") {
            document.getElementById("product_name").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("product_name").style.border =
                    "2px solid green";
            status = true;
        }
         if (product_quantity == null || product_quantity == "") {
            document.getElementById("product_quantity").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("product_quantity").style.border =
                    "2px solid green";
            status = true;
        }
		if (limited_item == null || limited_item == "") {
            document.getElementById("limited_item").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("limited_item").style.border =
                    "2px solid green";
            status = true;
        }
		if (extra_item == null || extra_item == "") {
            document.getElementById("extra_item").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("extra_item").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 

</body>
</html>