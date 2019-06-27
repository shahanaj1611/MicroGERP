<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is contact page</title>
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
				 <h2>Contact</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="controller/contact-insert.php" onsubmit="return valiform()">
				 	
							<div class="form-group">
								<label for="employee_id" > Employee Id</label>
								<input type="text" id="employee_id" name="employee_id" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="work_address" >Work Address</label>
								<input type="text" id="work_address" name="work_address" class="form-control" />
							</div>

							<div class="form-group">
								<label for="email" >Email </label>
								<input type="email" id="email" name="email" class="form-control" />
							</div>

							<div class="form-group">
								<label for="mobile" >mobile</label>
								<input type="text" id="mobile" name="mobile" class="form-control"/>
							</div>

							<button type="submit" name="contact" class="btn btn-success">submit</button>
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
   
        var employee_id = document.sform.employee_id.value;
        var work_address = document.sform.work_address.value;
		var email = document.sform.email.value;
        var mobile = document.sform.mobile.value;
        var status = false;

      
         if (employee_id == null || employee_id == "") {
            document.getElementById("employee_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("employee_id").style.border =
                    "2px solid green";
            status = true;
        }
         if (work_address == null || work_address == "") {
            document.getElementById("work_address").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("work_address").style.border =
                    "2px solid green";
            status = true;
        }
		if (email == null || email == "") {
            document.getElementById("email").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("email").style.border =
                    "2px solid green";
            status = true;
        }
		if (mobile == null || mobile == "") {
            document.getElementById("mobile").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("mobile").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>
