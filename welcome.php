<?php
	if (!isset($_POST['register']))
	{
		header('location: register.php');
	}
	else
	{
		$studentNo = $_POST['sid'];
		$firstName = $_POST['fn'];
		$lastName = $_POST['ln'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/styles.css" rel="stylesheet">

		<style type="text/css">
			.well 
			{
 				background-color: rgba(245, 245, 245, 0.4);
			}
		</style>
	</head>
	<body>
		<?php
			include("Header.html");
		?>

		<form action="register.php"
			class="form-horizontal">
			<div class="container">
				<h1 class="text-center">
					<?php 
						echo "Welcome, " . $firstName . " " . $lastName . "!"; 
					?>
				</h1>
				<div class="col-lg-offset-3 col-lg-6">
					<div class="well">
						<p>
							<img src="original.jpg" width="150px" />
						</p>

						<p>
							<?php 
								echo "<strong>Student ID Number: </strong>" . $studentNo . "</br>"; 
							?>
						</p>

						<p>
							<?php 
								echo "<strong>Email Address: </strong>" . $emailAddress . "</br>"; 
							?>
						</p>

						<p>
							<?php 
								echo "<strong>Password: </strong> " . $password . "</br>"; 
							?>
						</p>

						<p>
							<?php 
								echo "<strong>Date of Birth: </strong> " . $birthDate . "</br>"; 
							?>
						</p>

						<p>
							<?php 
								echo "<strong>Current Time: </strong> " . date('c') . "</br>"; 
							?>
						</p>

						<p>		
							<button name="back"
								class="bt btn-success">
								Back
							</button>
						</p>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>