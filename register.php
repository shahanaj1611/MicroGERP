<?php
	include 'inc/header.php';
	include 'lib/User.php';
	?>

	<?php

		$user = new User();
		if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['register'])) {
			$useRegi = $user->userRegistation($_POST); 
		}

	?>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Registration </h2>
				</div>
				<div class="panel-body">
					<div style="max-width:600px; margin:0 auto">
					<?php
						if (isset($useRegi)) {
							echo $useRegi;
						}
					?>
						<form action="" method="POST">

							<div class="form-group">
								<label for="name" >Your Name</label>
								<input type="text" id="name" name="name" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="username" >Username</label>
								<input type="text" id="username" name="username" class="form-control" />
							</div>

							<div class="form-group">
								<label for="Email" >Email Address</label>
								<input type="text" id="email" name="email" class="form-control" />
							</div>

							<div class="form-group">
								<label for="Password" >password</label>
								<input type="password" id="password" name="password" class="form-control"/>
							</div>

							<button type="submit" name="register" class="btn btn-success">submit</button>
						</form>
					</div>
				</div>
			</div>

<?php include'inc/footer.php'; ?>