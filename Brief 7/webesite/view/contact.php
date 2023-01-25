<?php
include_once("header.php");
?>

<div class="section-lg bg-secondary">
        <div class="container wide">
          <div class="text-center">
            <h1>Contacts</h1>
            <div class="subtitle-2">Lorem ipsum dolor sit amet, consectetur</div>
          </div>
        </div>
</div>

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13490.80023551714!2d-9.2350864!3d32.2930412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f59fa5bb517f58a!2sYouCode%20Safi!5e0!3m2!1sfr!2sma!4v1674396666351!5m2!1sfr!2sma" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			          </div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>







<?php
include_once("footer.php");
?>
