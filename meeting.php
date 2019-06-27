<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is meeting page</title>
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
				 <h2>Meeting</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="controller/meeting-insert.php" onsubmit="return valiform()">

							<div class="form-group">
								<label for="buyer_id" >Buyer Id</label>
								<input type="text" id="buyer_id" name="buyer_id" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="meeting_place" >meeting_place</label>
								<input type="text" id="meeting_place" name="meeting_place" class="form-control" />
							</div>

							<div class="form-group">
								<label for="date" >date </label>
								<input type="date" id="date" name="date" class="form-control" />
							</div>

							<div class="form-group">
								<label for="time" >time</label>
								<input type="time" id="time" name="time" class="form-control"/>
							</div>

							<button type="submit" name="meeting" class="btn btn-success">submit</button>
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
   
        var buyer_id = document.sform.buyer_id.value;
        var meeting_place = document.sform.meeting_place.value;
		var date = document.sform.date.value;
        var time = document.sform.time.value;
        var status = false;

      
         if (buyer_id == null || buyer_id == "") {
            document.getElementById("buyer_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("buyer_id").style.border =
                    "2px solid green";
            status = true;
        }
         if (meeting_place == null || meeting_place == "") {
            document.getElementById("meeting_place").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("meeting_place").style.border =
                    "2px solid green";
            status = true;
        }
		if (date == null || date == "") {
            document.getElementById("date").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("date").style.border =
                    "2px solid green";
            status = true;
        }
		if (time == null || time == "") {
            document.getElementById("time").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("time").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>