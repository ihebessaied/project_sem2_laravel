@extends('layouts.homehouses')

@section('content')

        <section class="page-section" id="services">
			<div class="container">
				<div class="text-center">
					<h2 class="section-heading text-uppercase">Services</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				</div>
				<div class="row text-center">
					<div class="col-md-3">
						<a href="cars.html" class="clean-link">
							<span class="fa-stack fa-4x">
								<i class="fas fa-circle fa-stack-2x text-primary"></i>
								<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
							</span>
							<h4 class="my-3">Cars</h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="clean-link">
							<span class="fa-stack fa-4x">
								<i class="fas fa-circle fa-stack-2x text-primary"></i>
								<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
							</span>
							<h4 class="my-3">Hotels</h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="clean-link">
							<span class="fa-stack fa-4x">
								<i class="fas fa-circle fa-stack-2x text-primary"></i>
								<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
							</span>
							<h4 class="my-3">Houses</h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="clean-link">
							<span class="fa-stack fa-4x">
								<i class="fas fa-circle fa-stack-2x text-primary"></i>
								<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
							</span>
							<h4 class="my-3">Events</h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Team-->
		<section class="page-section bg-light" id="team">
			<div class="container">
				<div class="text-center">
					<h2 class="section-heading text-uppercase">Our Amazing Team</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
							<h4>Parveen Anand</h4>
							<p class="text-muted">Lead Designer</p>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
							<h4>Diana Petersen</h4>
							<p class="text-muted">Lead Marketer</p>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
							<h4>Larry Parker</h4>
							<p class="text-muted">Lead Developer</p>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="btn btn-dark btn-social mx-2" href="#!">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact-->
		<section class="page-section" id="contact">
			<div class="container">
				<div class="text-center">
					<h2 class="section-heading text-uppercase">Contact Us</h2>
					<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
				</div>
				<form id="contactForm">
					<div class="row align-items-stretch mb-5">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" />
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" />
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group mb-md-0">
								<input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" />
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-textarea mb-md-0">
								<textarea class="form-control" id="message" placeholder="Your Message *" required="required"></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="text-center">
						<div id="success"></div>
						<button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
					</div>
				</form>
			</div>
		</section>
@endsection
