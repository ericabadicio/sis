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

			echo "Your Password is " . $password .
			". </br>
			Your Birthday is " . $birthDate .
			". </br></br>
			The time is " . date('c');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">
				<?php 
					echo "Welcome, " . $firstName . " " . $lastName . "!"; 
				?>
			</h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
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
				</div>
			</div>
		</div>
	</body>
</html>