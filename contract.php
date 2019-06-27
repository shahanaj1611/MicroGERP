<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is contract page</title>
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
				 <h2>Contract</h2>
				 
				  <form id="sform" role="form"  name="sform" action="controller/contract-insert.php" method="post" onsubmit="return valiform()">

				 	
							<div class="form-group">
								<label for="employee_id" > Employee Id</label>
								<input type="text" id="employee_id" name="employee_id" class="form-control"/>
							</div>
							
							<div class="form-group">
								<label for="buyer_id" > Buyer Id</label>
								<input type="text" id="buyer_id" name="buyer_id" class="form-control"/>
							</div>
							
							<div class="form-group">
								<label for="product_id" >product_id</label>
								<input type="text" id="product_id" name="product_id" class="form-control" />
							</div>

							<div class="form-group">
								<label for="issue_date" >issue_date </label>
								<input type="text" id="issue_date" name="issue_date" class="form-control" />
							</div>

							<div class="form-group">
								<label for="deadline" >deadline</label>
								<input type="text" id="deadline" name="deadline" class="form-control"/>
							</div>

							<button type="submit" name="contract" class="btn btn-success">submit</button>
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
		var buyer_id = document.sform.buyer_id.value;
       
        var product_id = document.sform.product_id.value;
		var issue_date = document.sform.issue_date.value;
        var deadline = document.sform.deadline.value;
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
		if (buyer_id == null || buyer_id == "") {
            document.getElementById("buyer_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("buyer_id").style.border =
                    "2px solid green";
            status = true;
        }
         if (product_id == null || product_id == "") {
            document.getElementById("product_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("product_id").style.border =
                    "2px solid green";
            status = true;
        }
		if (issue_date == null || issue_date == "") {
            document.getElementById("issue_date").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("issue_date").style.border =
                    "2px solid green";
            status = true;
        }
		if (deadline == null || deadline == "") {
            document.getElementById("deadline").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("deadline").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 

</body>
</html>
