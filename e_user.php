<!DOCTYPE html>
<html lang="en">
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
	<body id="edit-body">
		<form class="edit-form" method="post" action="#">
			<h1><i class="fa fa-lock"></i>&nbsp;Edit User</h1>
			<div class="form-group">
				<label for="f-name">Full Name</label>
				<input type="text" class="form-control" id="f-name" placeholder="Enter a name" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" placeholder="Enter an email address" required>
			</div>
			<div class="form-group">
				<label for="mobile">Mobile No</label>
				<input type="text" class="form-control" id="mobile" placeholder="Enter a mobile number" required>
			</div>
			<div class="form-group">
				<label for="mobile">Address</label>
				<input type="text" class="form-control" id="address" placeholder="Enter a street address" required>
			</div>
			<button type="submit" class="btn btn-success center-block">Edit User</button>
		</form>
	</body>
</html>