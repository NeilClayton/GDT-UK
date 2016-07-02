<?php
	include_once ('Actions/login_class.php');
   	$login = new login();
	$login->attemptLogin();
?>
<!DOCTYPE html>
<html class="login-html" lang="en">
	<head>
	<meta charset="UTF-8">
	<title>GDT: Nottingham Driving School - Driving Lessons UK</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="JS/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
	<!-- Custom CSS -->
	<link href="CSS/styles.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body id="login-body">
		<form class="login-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete="off">
			<img src="Images/gdt_logo3.png" class="img-responsive center-block" alt="gdt-logo" width="400" height="185">
			<div class="form-group">
				<label for="usernameInput" class="sr-only">Username:</label>
				<input type="text" class="form-control" id="usernameInput" name="username" placeholder="Enter your username" autofocus>
			</div>
			<div class="form-group">
				<label for="passwordInput" class="sr-only">Password:</label>
				<input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter your password">
			</div>
			<button type="submit" class="center-block">Submit</button>
			<p><a href="#">Forgotten your password?</a></p>
		</form>
	</body>
</html>
