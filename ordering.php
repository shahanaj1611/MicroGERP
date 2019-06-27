<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is ordering page</title>
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
				 <h2>ordering</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="controller/ordering-insert.php" onsubmit="return valiform()">

							<div class="form-group">
								<label for="product_id" >Product Id</label>
								<input type="text" id="product_id" name="product_id" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="ordering_item" >Ordering Item</label>
								<input type="text" id="ordering_item" name="ordering_item" class="form-control" />
							</div>

							<div class="form-group">
								<label for="ordering_date" >Ordering date </label>
								<input type="text" id="ordering_date" name="ordering_date" class="form-control" />
							</div>

							<div class="form-group">
								<label for="arrival_date" >Arrival date</label>
								<input type="text" id="arrival_date" name="arrival_date" class="form-control"/>
							</div>

							<button type="submit" name="ordering" class="btn btn-success">submit</button>
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
        var ordering_item = document.sform.ordering_item.value;
		var ordering_date = document.sform.ordering_date.value;
        var arrival_date = document.sform.arrival_date.value;
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
         if (ordering_item == null || ordering_item == "") {
            document.getElementById("ordering_item").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("ordering_item").style.border =
                    "2px solid green";
            status = true;
        }
		if (ordering_date == null || ordering_date == "") {
            document.getElementById("ordering_date").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("ordering_date").style.border =
                    "2px solid green";
            status = true;
        }
		if (arrival_date == null || arrival_date == "") {
            document.getElementById("arrival_date").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("arrival_date").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>
