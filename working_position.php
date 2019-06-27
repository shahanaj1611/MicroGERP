<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is working post page</title>
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
				 <h2>Working Position</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="controller/working_position-insert.php" onsubmit="return valiform()">
				 	
							<div class="form-group">
								<label for="employee_id" > Employee Id</label>
								<input type="text" id="employee_id" name="employee_id" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="department" >Department</label>
								<input type="text" id="department" name="department" class="form-control" />
							</div>

							<div class="form-group">
								<label for="position" >Position </label>
								<input type="text" id="position" name="position" class="form-control" />
							</div>

							<div class="form-group">
								<label for="working_hour" >Working Hour</label>
								<input type="text" id="working_hour" name="working_hour" class="form-control"/>
							</div>
							
							<div class="form-group">
								<label for="working_zone" >Working Zone</label>
								<input type="text" id="working_zone" name="working_zone" class="form-control"/>
							</div>

							<button type="submit" name="working_position" class="btn btn-success">submit</button>
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
        var department = document.sform.department.value;
		var position = document.sform.position.value;
        var working_hour = document.sform.working_hour.value;
        var working_zone = document.sform.working_zone.value;

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
         if (department == null || department == "") {
            document.getElementById("department").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("department").style.border =
                    "2px solid green";
            status = true;
        }
		if (position == null || position == "") {
            document.getElementById("position").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("position").style.border =
                    "2px solid green";
            status = true;
        }
		if (working_hour == null || working_hour == "") {
            document.getElementById("working_hour").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("working_hour").style.border =
                    "2px solid green";
            status = true;
        }
		if (working_zone == null || working_zone == "") {
            document.getElementById("working_zone").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("working_zone").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>
