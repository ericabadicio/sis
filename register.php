<?php
	#COMMENT
	//COMMENT
	/*COMMENT*/
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
			include("regHeader.html");
		?>
		<div class="container">
			<div class="col-lg-offset-3 col-lg-6">
					<form method="POST" action="welcome.php"
						class="form-horizontal">
						<h1 class="text-center">Sign Up</h1>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Student ID
							</label>
							<div class="col-lg-8">
								<input type="text" name="sid"
									class="form-control" placeholder="Enter ID Number" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Last Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="ln"
									class="form-control" placeholder="Enter Last Name" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								First Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="fn"
									class="form-control" placeholder="Enter First Name" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Email Address
							</label>
							<div class="col-lg-8">
								<input type="email" name="email"
									class="form-control" placeholder="Enter Email Address" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Password
							</label>
							<div class="col-lg-8">
								<input type="password" name="pwd"
									class="form-control" placeholder="Enter Password" required />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Birthdate
							</label>
							<div class="col-lg-8">
								<input type="date" name="bday"
									class="form-control" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-4 col-lg-8">
								<button name="register"
									class="bt btn-success">
									Register
								</button>
							</div>
						</div>
					</form>
			</div>
		</div>
	</body>
</html>