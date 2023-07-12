<div id="contact-section">
	<div class="container">
		<div class="clear-fix contact-address-content">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="left-side">
					<h2>Contact Info</h2>
					<ul>
						<li>
							<div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<h6>Address</h6>
							<p>829 Shikwane, Ga-Sekororo, Tzaneen, Limpopo</p>
						</li>
						<li>
							<div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<h6>Phone</h6>
							<p>+27 76 979 6293</p>
						</li>
						<li>
							<div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
							<h6>Email</h6>
							<p>info@sweetsound.co.za</p>
						</li>
					</ul>
				</div> <!-- /.left-side -->
			</div> <!-- /.col- -->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="left-side">
					<h2>Contact Info</h2>
					<ul>
						<li>
							<div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<h6>Address</h6>
							<p>20105 Dibate, Mmabatho, Mafikeng, North West</p>
						</li>
						<li>
							<div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<h6>Phone</h6>
							<p>+27 63 950 7534</p>
						</li>
						<li>
							<div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
							<h6>Email</h6>
							<p>info@sweetsound.co.za</p>
						</li>
					</ul>
				</div> <!-- /.left-side -->
			</div> <!-- /.col- -->
		</div> <!-- /.contact-address-content -->
		<!-- Contact Form -->
		<div class="send-message">
			<h2>Send a Message</h2>
			<form action="inc/sendemail.php" class="form-validation" autocomplete="off" method="post">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="single-input">
							<input type="text" placeholder="First Name*" name="Fname">
						</div> <!-- /.single-input -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="single-input">
							<input type="text" placeholder="Last Name*" name="Lname">
						</div> <!-- /.single-input -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single-input">
							<input type="email" placeholder="Your Email*" name="email">
						</div> <!-- /.single-input -->
					</div>
				</div> <!-- /.row -->
				<div class="single-input">
					<input type="text" placeholder="Subject" name="sub">
				</div> <!-- /.single-input -->
				<textarea placeholder="Write Message" name="message"></textarea>

				<button class="tran3s p-color-bg">Send Message</button>
			</form>
			<!-- Contact Form Validation Markup -->
			<!-- Contact alert -->
			<div class="alert-wrapper" id="alert-success">
				<div id="success">
					<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
					<div class="wrapper">
						<p>Your message was sent successfully.</p>
						</div>
				</div>
			</div> <!-- End of .alert_wrapper -->
			<div class="alert-wrapper" id="alert-error">
				<div id="error">
					<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
					<div class="wrapper">
						<p>Sorry!Something Went Wrong.</p>
					</div>
				</div>
			</div> <!-- End of .alert_wrapper -->
		</div> <!-- /.send-message -->
	</div> <!-- /.container -->
</div> <!-- /#contact-section -->