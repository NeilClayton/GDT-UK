<?php
session_start();

include('Includes/header2.html');
include('Includes/nav.php');
?>
			<section class="container-fluid">
				<section class="row introduction">
					<section class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						<h1>Prices</h1>
						<p>At GDT we offer various special offers for your individual needs.</p>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr><th>Time</th><th>Price</th></tr>
								<tr><td>1 Hour</td><td>£24.50</td></tr>
								<tr><td>1.5 Hours</td><td>£36.75</td></tr>
								<tr><td>2 Hours</td><td>£49.00</td></tr>
								<tr><td>Motorway</td><td>£28.00 per hour</td></tr>
							</table>
						</div>
						<div class="table-mobile">
							<table class="table table-bordered">
								<tr><th>Time</th></tr>
								<tr><td>1 Hour</td></tr>
								<tr><th>Price</th></tr>
								<tr><td>£24.50</td></tr>
							</table>
							<table class="table table-bordered">
								<tr><th>Time</th></tr>
								<tr><td>1.5 Hours</td></tr>
								<tr><th>Price</th></tr>
								<tr><td>£36.75</td></tr>
							</table>
						</div>
						<p>10 lessons for £220.00</p>
						<a class="price-link" href="discounts.php">Driving lesson gift vouchers</a> &#10072;
						<a class="price-link" href="discounts.php">Student discounts</a> &#10072;
						<a class="price-link" href="discounts.php">Recommend a friend</a>
					</section>
				</section>
			</section>
<?php
	include('Includes/socialicons.html');
	include('Includes/footer.html');
?>