<?php
    session_start();
	date_default_timezone_set("Europe/London");
	include_once ('Actions/video.php');
	include_once ('Actions/messages.php');
	include 'Actions/lessons.php';
	
	$vid = new video();
	$messages = new messages();

	include('Includes/header2.html');
	include('Includes/nav.php');

?>
			<div class="container-fluid">
				<div class="row profile-1">
					<div class="col-md-8 col-md-offset-2">
						<?php
						if (!empty($_SESSION['image'])){
							echo '<img src="' . $_SESSION['image'] . '" width="200" height="200" class="img-responsive img-thumbnail" alt="profile">';
						}
						else{
							echo '<img src="Images/user.png" width="200" height="200" class="img-responsive img-thumbnail" alt="profile">';
						}
						?>
						<h2><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></h2>
						<p><?php $_SESSION['gender'];?> from <?php echo $_SESSION['town'];?>, Nottingham</p>
						<p class="slogan">I really like driving.</p>
					</div>
				</div>
				<div class="row profile-2">
					<div class="col-md-8 col-md-offset-2">
						<div id="coll-content">
							<button class="btn coll-toggle active" data-toggle="collapse" data-target="#posts" data-parent="#profile-content"><i class="fa fa-user" aria-hidden="true"></i>User Feed</button>
							<button class="btn coll-toggle" data-toggle="collapse" data-target="#information" data-parent="#profile-content"><i class="fa fa-info-circle" aria-hidden="true"></i>Information</button>
							<button class="btn coll-toggle" data-toggle="collapse" data-target="#lessons" data-parent="#profile-content"><i class="fa fa-calendar" aria-hidden="true"></i>Lessons</button>
							<button class="btn coll-toggle" data-toggle="collapse" data-target="#videos" data-parent="#profile-content"><i class="fa fa-video-camera" aria-hidden="true"></i>Videos</button>
							<div id="posts" class="collapse in">
								<div class="new-post">
									<form method="post" action="">
										<textarea class="form-control" id="post-message" rows="5" cols="100" maxlength="600" required placeholder="Write a message..." autofocus></textarea>
										<button type="submit" id="newMessageFeed" class="btn btn-success pull-right" name="submit">Post<i class="fa fa-send"></i></button>
									</form>
								<?php
								$id = $_SESSION['clientID'];
								$messages->getMessages($id)?>
								</div>
							</div>
							<div id="information" class="collapse">
								<h6>Information</h6>
								<div class="about-details">
									<div class="about-detail">
										<p class="about-title">Name:</p>
										<p class="about-content"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
									</div>
									<div class="about-detail">
										<p class="about-title">Age:</p>
										<p class="about-content"><?php list($year,$month,$day) = explode("/",$_SESSION['DOB']);
											$year_diff  = date("Y") - $year;
											$month_diff = date("m") - $month;
											$day_diff   = date("d") - $day;
											if ($day_diff < 0 || $month_diff < 0) $year_diff--;
											echo $year_diff;  ?></p>
									</div>
									<div class="about-detail">
										<p class="about-title">Gender:</p>
										<p class="about-content"><?php echo $_SESSION['gender'] ;?></p>
									</div>
									<div class="about-detail">
										<p class="about-title">Hobbies:</p>
										<p class="about-content"><?php echo $_SESSION['hobbies']; ?></p>
									</div>
									<div class="about-detail">
										<p class="about-title">Town:</p>
										<p class="about-content"><?php echo $_SESSION['town']; ?></p>
									</div>
								</div>
								<button type="button" id="edit-self" onclick="overlay()" class="btn btn-info">Edit</button>
							</div>
							<div id="lessons" class="collapse">
								<h6>Booked Lessons</h6>
								<div class="table-responsive">
									<table class="table table-striped">
										<tr>
											<th>Date</th>
											<th>Time</th>
											<th>Duration</th>
										</tr>
										<?php $lesson = new lessons();
										$lesson->getLessonsBooked($_SESSION['clientID'])
										?>
									</table>
								</div>
							</div>
							<div id="videos" class="collapse">
								<h6>Videos</h6>
								<div class="videos">
									<?php $vid->getTaggedVideos($_SESSION['clientID']);?>
								</div>
							</div>
						</div>
							<div id="overlay">
								<div class="form-container">
									<button type="button" onclick="overlay()" class="pull-right"><i class="fa fa-remove" aria-hidden="true"></i></button><br>
									<form method="post" action="Actions/learner.php">
										<div class="form-group">
											<label for="e-firstname">First Name:</label>
											<input type="text" class="form-control" id="e-firstname" name="e-firstname" value="<?php echo $_SESSION['firstname'];?>">
										</div>
										<div class="form-group">
											<label for="e-lastname">Last Name:</label>
											<input type="text" class="form-control" id="e-lastname" name="e-lastname" value="<?php echo  $_SESSION['lastname'];?>">
										</div>
										<div class="form-group">
											<label for="e-date">Date:</label>
											<input type="date" class="form-control" id="e-date" name="e-date" value="<?php list($day,$month,$year) = explode("/",$_SESSION['DOB']); echo $year . "-" . $month . "-" . $day ?>">
										</div>
										<div class="form-group">
											<label class="radio-inline">
												<input type="radio" name="e-gender" value="Male" <?php if ($_SESSION['gender']=='Male'){echo 'checked';}?>>Male
											</label>
											<label class="radio-inline">
												<input type="radio" name="e-gender" value="Female" <?php if ($_SESSION['gender']=='Female'){echo 'checked';}?> >Female
											</label>
										</div>
										<div class="form-group">
											<label for="e-hobbies">Hobbies:</label>
											<input type="text" class="form-control" id="e-hobbies" name="e-hobbies" value="<?php echo $_SESSION['hobbies'];?>">
										</div>
										<div class="form-group">
											<label for="e-town">Town:</label>
											<input type="text" class="form-control" id="e-town" name="e-town" value="<?php echo $_SESSION['town'];?>">
										</div>
										<button type="submit" class="btn btn-success" onclick="refreshWindow()" name="submit">Submit<i class="fa fa-send" aria-hidden="true"></i></button>
									</form>
								</div>
							</div>
							<div id="overlay-dm">
								<div class="form-container">
									<button type="button" onclick="overlay_b2()" class="pull-right close-window"><i class="fa fa-remove" aria-hidden="true"></i></button><br>
									<form method="post" action="#" class="del-form">
										<p>Are you sure you want to delete this booking?</p>
										<div class="del-buttons">
											<button type="submit" class="btn btn-default" onclick="refreshWindow()" name="submit">Yes</button>
											<button type="button" class="btn btn-primary no-button" onclick="overlay_b2()">No</button>
										</div>
									</form>
								</div>
							</div>
					</div>
				</div>
			</div>
<?php
include('Includes/socialicons.html');
include('Includes/footer.php');
?>