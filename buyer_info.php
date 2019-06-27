<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is buyer-info page</title>
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
				 <h2>Insert Buyer Info</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="../controller/buyer-info-insert.php" onsubmit="return valiform()">

							<div class="form-group">
								<label for="product_id" >Your Product id</label>
								<input type="text" id="product_id" name="product_id" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="buyer_name" >buyer_name</label>
								<input type="text" id="buyer_name" name="buyer_name" class="form-control" />
							</div>

							<div class="form-group">
								<label for="company_address" >company_address</label>
								<input type="text" id="company_address" name="company_address" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="purchase_quantity" >purchase_quantity</label>
								<input type="text" id="purchase_quantity" name="purchase_quantity" class="form-control"/>
							</div>

							<button type="submit" name="buyer_info" class="btn btn-success">submit</button>
						</form>
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

<script>
    function valiform() {
   
        var product_id = document.sform.product_id.value;
        var buyer_name = document.sform.buyer_name.value;
		var company_address = document.sform.company_address.value;
        var purchase_quantity = document.sform.purchase_quantity.value;
        var status = false;

      
         if (product_id == null || product_id == "") {
            document.getElementById("product_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("product_id").style.border =
                    "2px solid green";
            status = true;
        }
         if (buyer_name == null || buyer_name == "") {
            document.getElementById("buyer_name").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("buyer_name").style.border =
                    "2px solid green";
            status = true;
        }
		if (company_address == null || company_address == "") {
            document.getElementById("company_address").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("company_address").style.border =
                    "2px solid green";
            status = true;
        }
		if (purchase_quantity == null || purchase_quantity == "") {
            document.getElementById("purchase_quantity").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("purchase_quantity").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>