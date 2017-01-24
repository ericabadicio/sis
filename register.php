<?php
	$studentNo = "";
	$firstName = "";
	$lastName = "";
	$emailAddress = "";
	$password = "";
	$birthDate = null;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/styles.css" rel="stylesheet">

		<style>
			input{
    			display:block;
			}
			label{
				display:block;
			}
		</style>

	</head>
	<body>
		<?php
			include("Header.html");
		?>
		<br/>
		<div class="container">
			<div class="col-lg-offset-1 col-lg-5">
				<form method="POST" action="welcome.php"
					class="form-horizontal">
					<h1><strong>Register</strong></h1>
					<div class="form-group">
						<div class="col-lg-8">
							<input type="text" name="sid"
								class="form-control" placeholder="ID Number" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-4">
							<input type="text" name="ln"
								class="form-control" placeholder="Last Name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" name="fn"
								class="form-control" placeholder="First Name" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-8">
							<input type="email" name="email"
								class="form-control" placeholder="Email Address" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-8">
							<input type="password" name="pwd"
								class="form-control" placeholder="Password" required />
						</div>
					</div>
					<div class="form-group">
							<h5>&nbsp; &nbsp; <strong>Birthday</strong></h5>
						<div class="col-lg-8">
							<input type="date" name="bday"
								class="form-control" required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
							<button name="register"
								class="bt btn-success">
								Register
							</button>
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-6" style="text-align: right">
					<div class="col-lg-6">
						<img src="DLS-CSB_Seal.png" />
					</div>
					<div class="col-lg-6">
						<img src="download.png" width="210px" />
					</div>
			</div>

		</div>
	</body>
</html>