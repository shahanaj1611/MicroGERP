<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is bill page</title>
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
				 <h2>Bill</h2>
				 <form id="sform" role="form" name="sform" method="post" action="controller/bill-insert.php" onsubmit="return valiform()">
	
							<div class="form-group">
								<label for="ordering_id" >Ordering Id</label>
								<input type="text" id="ordering_id" name="ordering_id" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="cost" >cost</label>
								<input type="text" id="cost" name="cost" class="form-control" />
							</div>

							<div class="form-group">
								<label for="paid" >paid </label>
								<input type="text" id="paid" name="paid" class="form-control" />
							</div>

							<div class="form-group">
								<label for="due" >due</label>
								<input type="text" id="due" name="due" class="form-control"/>
							</div>

							<button type="submit" name="bill" class="btn btn-success">submit</button>
						</form>
									
			</div>
		</div> <!-- /.content -->
	</div>
</section>
<footer>
	<div class="footer">
		<p>&copy;micro GERP</p>
	</div> <!-- /.footer -->
</footer>
	
</div>

<script>
    function valiform() {
   
        var ordering_id = document.sform.ordering_id.value;
        var cost = document.sform.cost.value;
		var paid = document.sform.paid.value;
        var due = document.sform.due.value;
        var status = false;

      
         if (ordering_id == null || ordering_id == "") {
            document.getElementById("ordering_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("ordering_id").style.border =
                    "2px solid green";
            status = true;
        }
         if (cost == null || cost == "") {
            document.getElementById("cost").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("cost").style.border =
                    "2px solid green";
            status = true;
        }
		if (paid == null || paid == "") {
            document.getElementById("paid").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("paid").style.border =
                    "2px solid green";
            status = true;
        }
		if (due == null || due == "") {
            document.getElementById("due").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("due").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>