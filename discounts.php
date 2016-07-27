<?php
	session_start();

	include('Includes/header2.html');
	include('Includes/nav.php');
?>
			<div class="container-fluid">
				<div class="row content">
					<div class="col-md-10 col-md-offset-1">
						<h2>Available discounts</h2>
						<p>Read the information below to learn about discounts. Click on the buttons to view information.</p>
						<div id="coll-content">
							<button class="btn coll-toggle active" data-toggle="collapse" data-target="#discounts" data-parent="#discounts-content"><i class="fa fa-info-circle" aria-hidden="true"></i>About</button>
							<button class="btn coll-toggle" data-toggle="collapse" data-target="#vouchers" data-parent="#discounts-content"><i class="fa fa-money" aria-hidden="true"></i>Vouchers</button>
							<button class="btn coll-toggle" data-toggle="collapse" data-target="#friends" data-parent="#discounts-content"><i class="fa fa-users" aria-hidden="true"></i>Recommend a Friend</button>
							<div id="discounts" class="collapse in">
								<h6>Student Driving Lesson Discounts</h6>
								<p>Student Discounts are available to all students on production of a valid NUS card.</p>
								<p>Student rate is <strong>£22.50</strong> per hour.</p>
								<p>Recommend a friend discount is <strong>£11</strong> per hour (terms and conditions apply).</p>
								<p><b class="asterisk">*&nbsp;</b>Please note student discounts are unavailable in conjunction with other offers, unless stated.</p>
								<p>For more information please contact Gary on <a href="telno:07870438438" target="_top">07870 438 438</a>.</p>
								<p>Or email me at <strong><a href="mailto:gdt1@hotmail.co.uk?Subject=Enquiry" target="_top">gdt1@hotmail.co.uk</a></strong>.</p>
							</div>
							<div id="vouchers" class="collapse">
								<h6>Driving lesson gift vouchers</h6>
								<p>At GDT we can offer that special present for someone who wants to learn to drive, but never got started on it, or it could be a birthday present or just a gift ,so why not treat them to a Driving Lesson Gift Voucher from GDT.</p>
								<p>The Driving Lesson Gift Voucher's can be paid for directly through the GDT website via a Paypal account and you will recieve a confirmation email within 24 hours, and the gift voucher's 2-3 working days from order. The Driving Lesson Gift Voucher's can be personalised for the person you are purchasing them for.</p>
								<h4>Please select from the following to make your payment via PayPal:</h4>
								<div class="jumbotron bronze">
									<h6><i class="fa fa-car" aria-hidden="true"></i>Intense Driving Course (Bronze)<b class="pull-right price">£220</b></h6>
									<p>With the Intensive Driving Course Bronze you will get 11 hours of driving tution. You can either take your lessons hourly or you can book more than 1 lesson a week, or you may like to book lessons by 1.1/2, 2 hour, 3 hours up to a maximum of 4 hours a day.</p>
									<button type="button"><i class="fa fa-paypal" aria-hidden="true"></i>Buy Now</button>
								</div>
								<div class="jumbotron silver">
									<h6><i class="fa fa-car" aria-hidden="true"></i>Intense Driving Course (Silver)<b class="pull-right price">£430</b></h6>
									<p><strong>20</strong> hours driving tuition plus one <strong>FREE</strong> attempt at the Driving Theory Test</p>
									<button type="button"><i class="fa fa-paypal" aria-hidden="true"></i>Buy Now</button>
								</div>
								<div class="jumbotron gold">
									<h6><i class="fa fa-car" aria-hidden="true"></i>Intense Driving Course (Gold)<b class="pull-right price">£700</b></h6>
									<p>You can either take your lessons hourly, or you can book more than 1 lesson a week.  You may like to book lessons by 1.1/2, 2 hour, 3 hours up to a maximum of 4 hours a day.</p>
									<button type="button"><i class="fa fa-paypal" aria-hidden="true"></i>Buy Now</button>
								</div>
							</div>
							<div id="friends" class="collapse">
								<h6>Recommend a friend</h6>
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
<?php
	include('Includes/socialicons.html');
	include('Includes/footer.php');
?>
