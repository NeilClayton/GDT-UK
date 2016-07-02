<?php
	session_start();
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
		<?php include('Includes/nav.php'); ?>
			<div class="container-fluid">
				<div class="row introduction">
					<div class="col-md-10 col-md-offset-1">
						<h2>Driving Lessons and Courses</h2>
						<p>Here at GDT Driving School we offer a variety of Driving Courses all designed to suit your needs, all at competitive prices.  Here are list of Driving lesson prices and the courses we offer:</p>
						<table class="table table-bordered">
							<tr>
								<th>Time</th>
								<th>Price</th>
							</tr>
							<tr>
								<td>1 Hour</td>
								<td>£24.50</td>
							</tr>
							<tr>
								<td>1.5 Hours</td>
								<td>£36.75</td>
							</tr>
							<tr>
								<td>2 Hours</td>
								<td>£49.00</td>
							</tr>
						</table>
						<ul class="nav nav-pills">
							<li class="active"><a data-toggle="tab" href="#bronze">Intensive driving courses (Bronze)</a></li>
							<li><a data-toggle="tab" href="#silver">Intensive driving courses (Silver)</a></li>
							<li><a data-toggle="tab" href="#gold">Intensive driving courses (Gold)</a></li>
							<li><a data-toggle="tab" href="#satellite">Satellite navigation lessons</a></li>
							<li><a data-toggle="tab" href="#passplus">Pass plus driving course</a></li>
							<li><a data-toggle="tab" href="#refresher">Refresher driving lessons</a></li>
							<li><a data-toggle="tab" href="#motorway">Motorway driving lessons</a></li>
						</ul>
						<div class="tab-content">
							<div id="bronze" class="tab-pane fade in active">
								<h3>Bronze driving course</h3>
								<p>This offer is an option for cheaper driving lessons, which can be booked for you to take the lessons when it suits you.</p>
								<p>With this course you get <strong>10</strong> hours of driving tuition.</p>
								<p>You can either take your lessons hourly or you can book more than 1 lesson a week, or you may like to book lessons by 1.1/2 , 2 hour , 3 hours up to a maximum of 4 hours a day.</p>
								<p>The price of this course is <strong>£220</strong>.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a>.</p>
							</div>
							<div id="silver" class="tab-pane fade">
								<h3>Silver driving courses</h3>
								<p>Here at GDT we appreciate how busy your life can be, and that every learner is different. That's why we offer our specially designed intensive courses that have been built with you in mind.</p>
								<p>These can be taken as quickly as you like, as one hour or up to four hours maximum,* suitably tailoring your driver training to meet your individual needs.</p>
								<p>Our <strong>Silver</strong> intensive course costs <strong>£430</strong>, and this includes:</p>
								<p><strong>20</strong> hours driving tuition plus one <strong>FREE</strong> attempt at the Driving theory test.</p>
								<p>If four hours are booked, there will be a 20 minute comfort break after the second hour, keeping your safety in mind.</p>
								<p>The <strong>FREE</strong> attempt at the <a href="#" target="_blank">driving theory test</a> is included in the price and can be booked by your instructor.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a>.</p>
							</div>
							<div id="gold" class="tab-pane fade">
								<h3>Gold driving courses</h3>
								<p>Here at GDT we appreciate how busy your life can be, and that every learner is different. That's why we offer our specially designed intensive courses that have been built with you in mind.</p>
								<p>These can be taken as quickly as you like, as one hour or up to four hours maximum, suitably tailoring your driver training to meet your individual needs.</p>
								<p>Our <strong>Gold</strong> intensive course costs <strong>£700</strong> and this includes:</p>
								<p><strong>30</strong> hours driving tuition plus one <strong>FREE</strong> attempt at the Driving Theory Test and one <strong>FREE</strong> attempt at the <a href="drivingpracticaltest.php" target="_blank">practical driving test</a>.</p>
								<p>However, if you feel that our intensive courses aren't right for you, then why not check out our deals on <a href="#" target="_blank">block driving lesson bookings</a>.</p>
								<p>If a four hour driving lesson is booked, there will be a 20 minute comfort break after the second hour, keeping your safety in mind.</p>
								<p>The <strong>FREE</strong> attempt at the <a href="#" target="_blank">driving theory test</a> and the <a href="#" target="_blank">practical driving test</a> <strong>are</strong> included in the price, and can be booked by your instructor.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a>.</p>
							</div>
							<div id="satellite" class="tab-pane fade">
								<h3>Satellite navigation lessons</h3>
								<p>Satelite navigation, or sat nav  is the way that many of people find there way around nowadays, gone are the days of map reading in the dark. So getting used to driving around with the directions be spoken to you, and the fact that you sometimes have to look at a little screen and keep your eye on the road can be quite daunting.</p>
								<p>Well thats where these lessons will be invaluable. Even sat nav's can be wrong, and these lessons will teach you not only how to get from A to B safely, but how not to panic and to continue driving safely.</p>
								<p>Lesson prices are <strong>£24.50</strong> per hour.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a>.</p>
							</div>								
							<div id="passplus" class="tab-pane fade">
								<h3>Pass plus driving course</h3>
								<p>Pass plus is available for any driver who has already passed their <a href="drivingpracticaltest.php" target="_blank">practical driving test</a>. The benefits of completing a pass plus course are cheaper car insurance and more advanced driver training.
								There are six modules taught over a six hour block, in one or two days.  There will be comfort breaks when required, for your safety.</p>
								<h4>The six modules are:</h4>
								<ul>
									<li>Module 1: Introduction and town driving.</li>
									<li>Module 2: All-weather driving.</li>
									<li>Module 3: Out of town driving and rural roads.</li>
									<li>Module 4: Night driving.</li>
									<li>Module 5: Dual carriageways.</li>
									<li>Module 6: Motorways.</li>
								</ul>
								<p>The cost of a pass plus course is <strong>£150</strong> if you pass your <a href="drivingpracticaltest.php" target="_blank">practical driving test</a> with GDT.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a>.</p>
							</div>
							<div id="refresher" class="tab-pane fade">
								<h3>Refresher lessons</h3>
								<p>Refresher lessons are structured around the driver who has passed their Practical Driving Test, but have probably not driven for a while and are feeling a little nervous about getting back behind the wheel
								So at GDT we will endevour to boost your self esteem, turning you into a safe and confident driver.</p>
								<p>Lesson prices are <strong>£24.50</strong> per hour and you can take as little or as many hours as you like until you feel confident.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a>.</p>
							</div>
							<div id="motorway" class="tab-pane fade">
								<h3>Motorway lessons</h3>
								<p>Motorway lessons are available for anyone, whether you have just passed your Practical Driving Test, or have been driving for a while and not yet got the confidence to drive on the motorway.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php include('Includes/footer.html'); ?>
		<?php include('Includes/socialicons.html');?>
	</body>
</html>