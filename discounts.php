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
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#discounts">Student driving lesson discounts</a></li>
							<li><a data-toggle="tab" href="#10lessons">10 driving lessons for £215</a></li>
							<li><a data-toggle="tab" href="#vouchers">Driving lesson gift vouchers</a></li>
							<li><a data-toggle="tab" href="#afriend">Recommend a friend</a></li>
						</ul>
						<div class="tab-content">
							<div id="discounts" class="tab-pane fade in active">
								<h3>Student Driving Lesson Discounts</h3>
								<p>Student Discounts are available to all students on production of a valid NUS card.</p>
								<p>Student rate is <strong>£22.50</strong> per hour.</p>
								<p>Recommend a friend discount is <strong>£11</strong> per hour (terms and conditions apply).</p>
								<p><b class="asterisk">*&nbsp;</b>Please note student discounts are unavailable in conjunction with other offers, unless stated.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <strong><a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a></strong>.</p>
							</div>
							<div id="vouchers" class="tab-pane fade">
								<h3>Driving lesson gift vouchers</h3>
								<p>At GDT we can offer that special present for someone who wants to learn to drive, but never got started on it, or it could be a birthday present or just a gift ,so why not treat them to a Driving Lesson Gift Voucher from GDT.</p>
								<p>The Driving Lesson Gift Voucher's can be paid for directly through the GDT website via a Paypal account and you will recieve a confirmation email within 24 hours, and the gift voucher's 2-3 working days from order. The Driving Lesson Gift Voucher's can be personalised for the person you are purchasing them for.</p>
								<h4>Please select from the following to make your payment via PayPal:</h4>
								<div class="jumbotron">
									<h3>Intense Driving Course (Bronze)<b class="pull-right price">£220</b></h3>
									<p>With the Intensive Driving Course Bronze you will get 11 hours of driving tution. You can either take your lessons hourly or you can book more than 1 lesson a week, or you may like to book lessons by 1.1/2, 2 hour, 3 hours up to a maximum of 4 hours a day.</p>
									<button type="button" class="btn btn-primary centerblock">Buy Now</button>
								</div>
								<div class="jumbotron">
									<h3>Intense Driving Course (Silver)<b class="pull-right price">£430</b></h3>
									<p><strong>20</strong> hours driving tuition plus one <strong>FREE</strong> attempt at the Driving Theory Test</p>
									<button type="button" class="btn btn-primary centerblock">Buy Now</button>
								</div>
								<div class="jumbotron">
									<h3>Intense Driving Course (Gold)<b class="pull-right price">£700</b></h3>
									<p>You can either take your lessons hourly, or you can book more than 1 lesson a week.  You may like to book lessons by 1.1/2, 2 hour, 3 hours up to a maximum of 4 hours a day.</p>
									<button type="button" class="btn btn-primary centerblock">Buy Now</button>
								</div>
							</div>
							<div id="afriend" class="tab-pane fade">
								<h3>Recommend a friend</h3>
								<p>As a learner driver with GDT, if you recommend a friend you will recieve an hours tuition at half the price of a normal 1 hour lesson (terms and conditions apply).</p>
								<p>Normal lesson with discount: <strong>£11.50</strong>.</p>
								<p>Normal lesson price with student discount: <strong>£11</strong>.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <strong><a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a></strong>.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php include('Includes/footer.html'); ?>
		<?php include('Includes/socialicons.html');?>
	</body>
</html>