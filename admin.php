<!DOCTYPE html>
<html class="other-html" lang="en">
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
	<body>
		<?php include('Includes/header2.html'); ?>
		<?php include('Includes/nav.php'); ?>
			<div class="container-fluid">
				<div class="row admin">
					<div class="col-md-8 col-md-offset-2">
						<h2>Admin Panel&nbsp;<i class="fa fa-lock"></i></h2>
						<ul class="nav nav-pills">
							<li class="active"><a data-toggle="tab" href="#add-lessons"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add bookings</a></li>
							<li><a data-toggle="tab" href="#man-lessons"><i class="fa fa-book"></i>&nbsp;&nbsp;Manage bookings</a></li>
							<li><a data-toggle="tab" href="#add-users"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Users</a></li>
							<li><a data-toggle="tab" href="#man-users"><i class="fa fa-users"></i>&nbsp;&nbsp;Manage Users</a></li>
							<li><a data-toggle="tab" href="#add-videos"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Add Videos</a></li>
							<li><a data-toggle="tab" href="#man-videos"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;Manage Videos</a></li>
						</ul>
						<div class="tab-content">
							<div id="add-lessons" class="tab-pane fade in active">
								<h2>Add bookings</h2>
								<form method="post" action="#">
									<div class="form-group">
										<label for="name">Client</label>
										<select class="form-control" id="name" required>
											<option value="" selected>...</option>
											<option value="JoeBloggs">Joe Bloggs</option>
											<option value="JohnDoe">John Doe</option>
										</select>
									</div>
									<div class="form-group">
										<label for="b-date">Date</label>
										<input type="text" class="form-control" id="b-date" name="b-date" placeholder="Enter a date" required>
									</div>
									<div class="form-group">
										<label for="b-time">Time</label>
										<input type="text" class="form-control" id="b-time" name="b-time" placeholder="Enter a time" required>
									</div>
									<div class="form-group">
										<label for="duration">Duration</label>
										<select class="form-control" id="duration" required>
											<option selected value="">...</option>
											<option value="#">1 hour</option>
											<option value="#">1.5 hours</option>
											<option value="#">2 hours</option>
										</select>
									</div>
									<div class="form-group">
										<h6>How many lessons are being booked?</h6>
										<label class="radio-inline">
											<input type="radio" name="1-lesson">1
										</label>
										<label class="radio-inline">
											<input type="radio" name="10-lesson">10
										</label>
										<label class="radio-inline">
											<input type="radio" name="20-lesson">20
										</label>
										<label class="radio-inline">
											<input type="radio" name="23-lesson">30
										</label>
									</div>
									<button type="submit" class="btn btn-success" onclick="refreshWindow()">Submit&nbsp;&nbsp;<i class="fa fa-send"></i></button>
								</form>
							</div>
							<div id="man-lessons" class="tab-pane fade">
								<h2>Booked Lessons</h2>
								<div class="table-responsive">
									<table class="table table-hover">
										<tr><th>Booking ID</th><th>Full Name</th><th>Date</th><th>Time</th><th>Duration</th><th>Edit</th><th>Delete</th></tr>
										<tr><td>1</td><td>John Smith</td><td>29/05/2016</td><td>15:55</td><td>1 hour</td><td><button type="button" onclick="editWindowB()"><i class="fa fa-pencil"></i></button></td><td><button type="button" onclick="delWindowB()"><i class="fa fa-remove"></i></button></td></tr>
										<tr><td>2</td><td>Joe Bloggs</td><td>05/06/2016</td><td>14:40</td><td>2 hours</td><td><button type="button" onclick="editWindowB()"><i class="fa fa-pencil"></i></button></td><td><button type="button" onclick="delWindowB()"><i class="fa fa-remove"></i></button></td></tr>
									</table>
								</div>
								<div class="table-mobile">
									<table class="table table-bordered">
										<tr><th>Booking ID</th></tr>
										<tr><td>1</td></tr>
										<tr><th>Full Name</th></tr>
										<tr><td>John Smith</td></tr>
										<tr><th>Date</th></tr>
										<tr><td>29/05/2016</td></tr>
										<tr><th>Time</th></tr>
										<tr><td>15:55</td></tr>
										<tr><th>Duration</th></tr>
										<tr><td>1 hour</td></tr>
										<tr><th>Edit</th></tr>
										<tr><td><button type="button" onclick="editWindowB()"><i class="fa fa-pencil"></i></button></td></tr>
										<tr><th>Delete</th></tr>
										<tr><td><button type="button" onclick="delWindowB()"><i class="fa fa-remove"></i></button></td></tr>
									</table>
								</div>
							</div>
							<div id="add-users" class="tab-pane fade">
								<h2>Add users</h2>
								<form method="post" action="#">
									<div class="form-group">
										<label for="u-name">Full Name</label>
										<input type="text" class="form-control" id="u-name" name="u-name" placeholder="Enter a name" required>
									</div>
									<div class="form-group">
										<label for="u-email">Email</label>
										<input type="text" class="form-control" id="u-email" name="u-email" placeholder="Enter an email address" required>
									</div>
									<div class="form-group">
										<label for="u-mobile">Mobile No</label>
										<input type="text" class="form-control" id="u-mobile" name="u-mobile" placeholder="Enter a mobile number" required>
									</div>
									<div class="form-group">
										<label for="u-address">Address</label>
										<input type="text" class="form-control" id="u-address" name="u-address" placeholder="Enter a street address" required>
									</div>
									<button type="submit" class="btn btn-success" onclick="refreshWindow()">Submit&nbsp;&nbsp;<i class="fa fa-send"></i></button>
								</form>
							</div>
							<div id="man-users" class="tab-pane fade">
								<h2>User Management</h2>
								<div class="table-responsive">
									<table class="table table-hover">
										<tr><th>User ID</th><th>Full name</th><th>Email</th><th>Mobile No</th><th>Address</th><th>Edit</th><th>Delete</th></tr>
										<tr><td>1</td><td>John Smith</td><td>jsmith@email.com</td><td>123 4567 8901</td><td>1 Dashboard Avenue</td><td><button type="button" onclick="editWindowU()"><i class="fa fa-pencil"></i></button></td><td><button type="button" onclick="delWindowU()"><i class="fa fa-remove"></i></button></td></tr>
										<tr><td>2</td><td>Joe Bloggs</td><td>jbloggs@email.com</td><td>123 4567 8901</td><td>2 Dashboard Avenue</td><td><button type="button" onclick="editWindowU()"><i class="fa fa-pencil"></i></button></td><td><button type="button" onclick="delWindowU()"><i class="fa fa-remove"></i></button></td></tr>
									</table>
								</div>
								<div class="table-mobile">
									<table class="table table-bordered">
										<tr><th>User ID</th></tr>
										<tr><td>1</td></tr>
										<tr><th>Full Name</th></tr>
										<tr><td>John Smith</td></tr>
										<tr><th>Email</th></tr>
										<tr><td>jsmith:email.com</td></tr>
										<tr><th>Mobile No</th></tr>
										<tr><td>123 4567 8901</td></tr>
										<tr><th>Address</th></tr>
										<tr><td>1 Dashboard Avenue</td></tr>
										<tr><th>Edit</th></tr>
										<tr><td><button type="button" onclick="editWindowU()"><i class="fa fa-pencil"></i></button></td></tr>
										<tr><th>Delete</th></tr>
										<tr><td><button type="button" onclick="delWindowU()"><i class="fa fa-remove"></i></button></td></tr>
									</table>
								</div>
							</div>
							<div id="add-videos" class="tab-pane fade">
								<h2>Add Videos</h2>
								<form method="post" action="#">
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
									<button type="submit" class="btn btn-success" onclick="refreshWindow()">Submit&nbsp;&nbsp;<i class="fa fa-send"></i></button>
								</form>
							</div>
							<div id="man-videos" class="tab-pane fade">
								<h2>Videos</h2>
								<div class="table-responsive">
									<table class="table table-hover">
										<tr><th>Video ID</th><th>Title</th><th>Code</th><th>Client</th><th>Date</th><th>Edit</th><th>Delete</th></tr>
										<tr><td>1</td><td>John's lesson</td><td>345JJ34K7SD</td><td>John Smith</td><td>29/05/2016</td><td><button type="button" onclick="editWindowV()"><i class="fa fa-pencil"></i></button></td><td><button type="button" onclick="delWindowV()"><i class="fa fa-remove"></i></button></td></tr>
										<tr><td>2</td><td>Joe's lesson</td><td>345JJ34K7SD</td><td>Joe Bloggs</td><td>29/05/2016</td><td><button type="button" onclick="editWindowV()"><i class="fa fa-pencil"></i></button></td><td><button type="button" onclick="delWindowV()"><i class="fa fa-remove"></i></button></td></tr>
									</table>
								</div>
								<div class="table-mobile">
									<table class="table table-bordered">
										<tr><th>Video ID</th></tr>
										<tr><td>1</td></tr>
										<tr><th>Title</th></tr>
										<tr><td>John's Lesson</td></tr>
										<tr><th>Code</th></tr>
										<tr><td>345JJ34K7SD</td></tr>
										<tr><th>Client</th></tr>
										<tr><td>John Smith</td></tr>
										<tr><th>Date</th></tr>
										<tr><td>29/05/2016</td></tr>
										<tr><th>Edit</th></tr>
										<tr><td><button type="button" onclick="editWindowV()"><i class="fa fa-pencil"></i></button></td></tr>
										<tr><th>Delete</th></tr>
										<tr><td><button type="button" onclick="delWindowV()"><i class="fa fa-remove"></i></button></td></tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php include('Includes/footer.html'); ?>
		<script src="JS/fixed-window.js"></script>
		<script src="JS/refresh.js"></script>
	</body>
</html>