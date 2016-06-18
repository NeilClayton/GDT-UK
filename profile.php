<?php
    session_start();
	date_default_timezone_set("Europe/London");
	include_once ('Actions/video.php');
	$vid = new video();

?>
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
    <script src="JS/text-slider.js"></script><!--
	<script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
	<!-- Custom CSS -->
	<link href="CSS/styles.css" rel="stylesheet">
	<link href="CSS/social-styles.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php include('Includes/header2.html'); ?>
		<?php include('Includes/nav.html'); ?>
			<section class="container-fluid">
				<section class="row profile-1">
					<section class="col-md-8 col-md-offset-2">
						<img src="Images/user.png" width="200" height="200" class="img-responsive img-thumbnail" alt="profile">
						<h1><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></h1>
						<p>Male from <?php echo $_SESSION['town'];?>, Nottingham</p>
						<p class="slogan">I really like driving.</p>
					</section>
				</section>
				<section class="row profile-2">
					<section class="col-md-8 col-md-offset-2">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#posts"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;User Feed</a></li>
							<li><a data-toggle="tab" href="#information"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;Information</a></li>
							<li><a data-toggle="tab" href="#lessons"><i class="fa fa-book"></i>&nbsp;&nbsp;Lesson bookings</a></li>
							<li><a data-toggle="tab" href="#videos"><i class="fa fa-video-camera"></i>&nbsp;&nbsp;Videos</a></li>
						</ul>
						<section class="tab-content">
							<section id="posts" class="tab-pane fade in active">
								<section class="new-post">
									<form method="post" action="#">
										<textarea class="form-control" id="post-message" rows="5" cols="100" maxlength="600" required placeholder="Write a message..."></textarea>
										<button type="submit" class="btn btn-success pull-right">Post&nbsp;&nbsp;<i class="fa fa-send"></i></button>
									<form>
								</section>
								<section class="user-post">
									<section class="user-details">
										<img src="Images/user.png" width="75" height="75" class="img-responsive img-circle" alt="profile">
										<h2><a href="#">John Smith</a><b class="pull-right datetime">16:37 27/05/16</b></h2>
									</section>
									<section class="user-message">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec odio vitae dui sagittis posuere a id est. Sed iaculis magna orci, a posuere arcu finibus id.</p>
									</section>
										<section class="user-replies">
											<section class="user-reply">
												<section class="reply-details">
													<img src="Images/user.png" width="50" height="50" class="img-responsive img-circle" alt="profile">
													<h4><a href="#">Joe Bloggs</a><b class="pull-right r-datetime">16:39 27/05/16</b></h4>
												</section>
												<section class="reply-message">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec odio vitae dui sagittis posuere a id est. Sed iaculis magna orci, a posuere arcu finibus id.</p>
												</section>
											</section>
											<section class="user-reply">
												<section class="reply-details">
													<img src="Images/user.png" width="50" height="50" class="img-responsive img-circle" alt="profile">
													<h4><a href="#">John Smith</a><b class="pull-right r-datetime">12:00 28/05/16</b></h4>
												</section>
												<section class="reply-message">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec odio vitae dui sagittis posuere a id est. Sed iaculis magna orci, a posuere arcu finibus id.</p>
												</section>
											</section>
											<section class="new-reply">
												<form method="post" action="#">
													<textarea class="form-control" id="reply-message" rows="3" cols="100" maxlength="600" required placeholder="Write a reply..."></textarea>
													<button type="submit" class="btn btn-success pull-right">Reply&nbsp;&nbsp;<i class="fa fa-comments"></i></button>
												</form>
											</section>
										</section>
								</section>
							</section>
							<section id="information" class="tab-pane fade">
								<h3>Information</h3>
								<section class="about-details">
									<section class="about-detail">
										<p class="about-title">Name:</p>
										<p class="about-content"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
									</section>
									<section class="about-detail">
										<p class="about-title">Age:</p>
										<p class="about-content"><?php list($day,$month,$year) = explode("/",$_SESSION['dob']);
											$year_diff  = date("Y") - $year;
											$month_diff = date("m") - $month;
											$day_diff   = date("d") - $day;
											if ($day_diff < 0 || $month_diff < 0) $year_diff--;
											echo $year_diff;  ?></p>

									</section>
									<section class="about-detail">
										<p class="about-title">Gender:</p>
										<p class="about-content"><?php echo $_SESSION['gender'] ;?></p>
									</section>
									<section class="about-detail">
										<p class="about-title">Hobbies:</p>
										<p class="about-content"><?php echo $_SESSION['hobbies']; ?></p>
									</section>
									<section class="about-detail">
										<p class="about-title">Town:</p>
										<p class="about-content"><?php echo $_SESSION['town']; ?></p>
									</section>
								</section>
								<button type="button" onclick="overlay()" class="btn btn-info">Edit</button>
                                    
                                <!--EDIT OVERLAY-->
                                <div id="overlay">
                                    <div>
                                        <!-- PUT NEW FORM HERE -->
                                        <p>place holder for new form to edit user details</p>
                                        <a href="#" onclick="overlay()">close</a>
                                        
                                    </div>
                                </div>
                                
							</section>
							<section id="lessons" class="tab-pane fade">
								<h3>Booked Lessons</h3>
								<section class="table-responsive">
									<table class="table table-striped">
										<tr>
											<th>Date</th>
											<th>Time</th>
										</tr>
										<tr class="outdated">
											<td>27/05/2016</td>
											<td>16:45</td>
										</tr>
										<tr>
											<td>29/05/2016</td>
											<td>15:45</td>
										</tr>
										<tr>
											<td>05/06/2016</td>
											<td>15:45</td>
										</tr>
									</table>
								</section>
							</section>
							<section id="videos" class="tab-pane fade">
								<h3>Videos</h3>
								<section class="videos">
									<?php $vid->getTaggedVideos($_SESSION['clientID']);?>
								</section>
								</section>
							</section>
						</section>
					</section>
				</section>
			</section>
		<?php include('Includes/footer.html'); ?>
		<?php include('Includes/socialicons.html');?>
	</body>
</html>