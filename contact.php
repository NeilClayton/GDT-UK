<?php
	session_start();
?>

<!DOCTYPE html>
<html class="other-html" lang="en">
	<head>
	<meta charset="UTF-8">
	<title>GDT: Nottingham Driving School - Driving Lessons UK</title>
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="JS/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
	<link href="CSS/styles.css" rel="stylesheet">
	<link href="CSS/social-styles.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php include('Includes/header2.html'); ?>
		<?php include('Includes/nav.php'); ?>
			<div class="container-fluid">
				<div class="row contact">	
					<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
						<h3>Contact GDT-UK</h3>
						<form>
							<div class="form-group">
								<label for="name">Full Name<b class="asterisk">*</b></label>
								<input type="text" class="form-control" id="name" placeholder="Who are you?" required>
							</div>
							<div class="form-group">
								<label for="email">Email<b class="asterisk">*</b></label>
								<input type="email" id="email" class="form-control" placeholder="Please enter your e-mail address"  required>
							</div>
							<div class="form-group">
								<label for="mobile-number">Mobile No</label>
								<input type="text" id="mobile-number" class="form-control" placeholder="Please enter your mobile number">
							</div>
							<div class="form-group">
								<label for="subject">Subject<b class="asterisk">*</b></label>
								<input type="text" id="subject" class="form-control" placeholder="Enter a subject..." required>
							</div>
							<div class="form-group">
								<label for="message">Message<b class="asterisk">*</b></label>
								<textarea class="form-control" id="message" rows="7" cols="100" maxlength="600" required placeholder="Please enter your message"></textarea>
							</div>
							<button type="submit" class="btn btn-success" name="submit">Submit<i class="fa fa-send" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		<?php include('Includes/footer.html'); ?>
		<?php include('Includes/socialicons.html');?>
	</body>
</html>