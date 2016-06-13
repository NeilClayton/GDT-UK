<!DOCTYPE html>
<html lang="en">
	<head>
	<title>GDT: Nottingham Driving School - Driving Lessons UK</title>
	<meta charset="UTF-8">
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
			<h1><i class="fa fa-lock"></i>&nbsp;Edit Video</h1>
			<div class="form-group">
				<label for="v-title">Title</label>
				<input type="text" class="form-control" id="v-title" name="v-title" placeholder="Enter a title" required>
			</div>
			<div class="form-group">
				<label for="v-code">Email</label>
				<input type="text" class="form-control" id="v-code" name="v-code" placeholder="Enter the video code" required>
			</div>
			<div class="form-group">
				<label for="v-client">Client</label>
				<select class="form-control" id="v-client" name="v-client" required>
					<option value="" selected>...</option>
					<option value="JoeBloggs">Joe Bloggs</option>
					<option value="JohnDoe">John Doe</option>
				</select>
			</div>
			<button type="submit" class="btn btn-success center-block">Edit Video</button>
		</form>
	</body>
</html>