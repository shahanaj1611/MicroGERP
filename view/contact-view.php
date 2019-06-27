<?php
session_start();
include ("../config/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>This is view page</title>
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
			<a href="../index.php"><h2>Micro GERP</h2></a>
		</div> <!-- /.logo -->
		<div class="nav">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<?php
			if($_SESSION){
		?>
				
				<li><a href="view.php">View</a></li>
				<li><a href="../apps.php">Apps</a></li>
				<li><a href="../controller/logout.php">Logout</a></li>
				<li><a href="#" style="color:red;"><?php 	echo $_SESSION['username']; ?></a></li>
				<?php
}
				else{
				?>

				<li><a href="registion.php">Registion</a></li>
<li><a href="view/login.php">Login</a></li>
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
				 <div class="table">
			<h2>Total View result</h2>
			<input type="text" name="search" placeholder="search......" id="search" onkeyup="mySearch()">
			<table id="table">
				<thead>
					<tr>
						<th>Contact Id</th>
						<th>Employee Id</th>
						<th>work_address</th>
						<th>email</th>		
						<th>mobile</th>
						<th>Edit</th>
						<th>Delete</th>

					</tr>

				</thead>
				<tbody>
					<?php
					$sql="select * from contact";
					$result=mysqli_query($conn,$sql);
					while ($d=$result->fetch_object()){
					?>
					<tr>
						<td><?php echo $d->contact_id; ?></td>
						<td><?php echo $d->employee_id;?></td>
						<td><?php echo $d->work_address;?></td>
						<td><?php echo $d->email;?></td>
						<td><?php echo $d->mobile;?></td>

						<td><a href="contact-edit.php?ids=<?php echo $d->contact_id; ?>">Edit</a></td>
						<td><a href="../controller/contact-delete.php?ids=<?php echo $d->contact_id; ?>">Delete</a></td>
					</tr>
					<?php 
}
					?>
				</tbody>
			</table>
			
	
				
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
</body>
</html>
	<script type="text/javascript">
		
		function mySearch(){

			var input,filter,table,tr,td,i;
			input=document.getElementById('search');
			filter=input.value.toUpperCase();
			table=document.getElementById('table');
			tr=table.getElementsByTagName('tr');
		
			for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td1 = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
     td3 = tr[i].getElementsByTagName("td")[3];
    if (td || td1 ||td2 ||td3) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1 || td3.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
		}
	</script>