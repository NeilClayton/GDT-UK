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
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="JS/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
	<link href="CSS/styles.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body id="login-body">
		<form class="login-form" method="post" action="login.php" autocomplete="off">
			<h2>Login</h2>
			<div class="form-group">
				<label for="usernameInput" class="sr-only">Username:</label>
				<input type="text" class="form-control" id="usernameInput" name="username" placeholder="Username" autofocus>
			</div>
			<div class="form-group">
				<label for="passwordInput" class="sr-only">Password:</label>
				<input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password" autocomplete="new-password">
			</div>
			<button type="submit" class="center-block">Submit</button>
			<p><a href="#">Forgotten your password?</a></p>
		</form>
	</body>
</html>
