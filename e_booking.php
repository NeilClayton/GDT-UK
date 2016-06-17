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
			<h1><i class="fa fa-lock"></i>&nbsp;Edit Booking</h1>
			<div class="form-group">
				<label for="fullname">Select a user</label>
				<select class="form-control" id="fullname" name="fullname">
					<option value="" selected>...</option>
					<option value="JoeBloggs">Joe Bloggs</option>
					<option value="JohnDoe">John Doe</option>
				</select>
			</div>
			<div class="form-group">
				<label for="date">Edit the date</label>
				<input type="text" class="form-control" id="date" name="date">
			</div>
			<div class="form-group">
				<label for="time">Edit the time</label>
				<input type="text" class="form-control" id="time" name="time">
			</div>
			<div class="form-group">
				<label for="duration">Edit the duration</label>
				<select class="form-control" id="duration" required>
					<option selected value="">...</option>
					<option value="#">1 hour</option>
					<option value="#">1.5 hours</option>
					<option value="#">2 hours</option>
				</select>
			</div>
			<button type="submit" class="btn btn-success center-block" onclick="refreshBookings()">Edit Booking</button>
		</form>
	</body>
	<script src="JS/refresh.js"></script>
</html>