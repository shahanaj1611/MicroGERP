<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is home page</title>
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
			<a href="index.php"><h2>MicroGerp</h2></a>
		</div> <!-- /.logo -->
		<div class="nav">
			<ul>
				<li><a href="../index.php">Home</a></li>
				
			<?php
			if($_SESSION){
		?>
				<li><a class="" href="../apps.php">Apps</a></li>
				<li><a href="../view.php">View</a></li>
				<li><a href="controller/logout.php">Logout</a></li>
				<li><a href="#" style="color:red;"><?php 	echo $_SESSION['username']; ?></a></li>
				<?php
}
				else{
				?>

				<li><a href="registion.php">Registration</a></li>
<li><a href="login.php">Login</a></li>
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
				 <h2>Login Now</h2>
				 <h3 style="color: green; font-size: 28px;"><?php
                if(isset($_GET['save'])){
                	echo $_GET['save'];
                }
               ?>
                  </h3>
                 <h3 style="color: red; font-size: 28px;">
                <?php
                if(isset($_GET['error'])){
                	echo $_GET['error'];
                }
				 ?></h3>
				
				 	<form id="sform" role="form"  name="sform"  method="post" action="../controller/login-insert.php" onsubmit="return valiform()">
				 	<label>User Name</label><br>
				 	<input type="text" name="username"  placeholder="Enter Full Name" id="username"><br>
				 	<label>Password</label><br>
				 	<input type="password" name="password"  placeholder="Enter Password" id="password"><br>
				 	
				 	<input type="submit" name="submit"  value="Login" ><br>
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
   
        var username = document.sform.username.value;
        var password = document.sform.password.value;
        var status = false;

      
         if (username == null || username == "") {
            document.getElementById("username").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("username").style.border =
                    "2px solid green";
            status = true;
        }
         if (password == null || password == "") {
            document.getElementById("password").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("password").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>