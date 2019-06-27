<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is personal info page</title>
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
				 <h2>Personal Info</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="controller/personal_info-insert.php" onsubmit="return valiform()">
				 	
							<div class="form-group">
								<label for="nid" > NID</label>
								<input type="text" id="nid" name="nid" class="form-control"/>
							</div>


							<button type="submit" name="personal_info" class="btn btn-success">submit</button>
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
   
      var product_name = document.sform.product_name.value;
        var nid = document.sform.nid.value;
         var status = false;

      
         if (nid == null || nid == "") {
            document.getElementById("nid").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("nid").style.border =
                    "2px solid green";
            status = true;
        }
         



        return status;
    }
</script> 
</body>
</html>
