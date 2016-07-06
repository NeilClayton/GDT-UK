<?php
	session_start();

	include('Includes/header2.html');
	include('Includes/nav.php');
?>
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
<?php
	include('Includes/socialicons.html');
	include('Includes/footer.html');
?>
