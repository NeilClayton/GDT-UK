<!DOCTYPE html>
<html class="other-html" lang="en">
	<head>
	<meta charset="UTF-8">
	<title>GDT: Nottingham Driving School - Driving Lessons UK</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
	<body>

		<?php include('Includes/header2.html'); ?>
		<?php include('Includes/nav.html'); ?>

			<div class="container-fluid">
				<div class="row contact">	
					<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						<form>
							<div class="form-group">
								<label for="name">Full Name</label>
								<input type="text" class="form-control" id="name" placeholder="Who are you?" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" id="email" class="form-control" placeholder="Please enter your e-mail address"  required>
							</div>
							<div class="form-group">
								<label for="mobile-number">Mobile No</label>
								<input type="text" id="mobile-number" class="form-control" placeholder="Please enter your mobile number">
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" id="subject" class="form-control" placeholder="Enter a subject...">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" id="message" rows="7" cols="100" maxlength="600" required placeholder="Please enter your message"></textarea>
								<p id="countleft"></p><br>
							</div>
							<div class="checkbox">							
								<label>
								<input type="checkbox" required>I agree to the <a href="terms.html" target="_blank">Terms and Conditions</a>
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>

		<?php include('Includes/footer.html'); ?>

	</body>
</html>