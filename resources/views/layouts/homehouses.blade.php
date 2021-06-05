<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Agency - Start Bootstrap Theme</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet" /> </head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="#page-top"> <img src="assets/img/navbar-logo.svg" alt="..." /> </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> Menu <i class="fas fa-bars ms-1"></i> </button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"> <a class="nav-link {{Request::is('/') ? 'active' : '' }}" href="{{asset('/')}}">Home</a> </li>
					<li class="nav-item"> <a class="nav-link {{Request::is('cars') ? 'active' : '' }}" href="{{asset('/cars')}}">Cars</a> </li>
					<li class="nav-item"> <a class="nav-link {{Request::is('houses') ? 'active' : '' }}" href="{{asset('/houses')}}">Houses</a> </li>
					<li class="nav-item"> <a class="nav-link" href="hotels.html">Hotels</a> </li>
					<li class="nav-item"> <a class="nav-link" href="events.html">Events</a> </li>
					<li class="nav-item" style="cursor:pointer;"> <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa fa-user"></i>
</a> </li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Login modal-->
	<!-- Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Login
      </button>
    </h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<form method="POST" action="{{ route('login') }}"> @csrf
										<div class="form-group">
											<div class="input-group">
												<input type="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email') <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> @enderror </div>
											<br>
											<div class="input-group">
												<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password') <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> @enderror </div>
											<br>
											<div class="input-group right">
												<button type="submit" class="btn btn-primary ">{{__('Log in')}}</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Register
      </button>
    </h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<form method="POST" action="{{ route('register') }}"> @csrf
										<div class="form-group">
											<div class="input-group">
												<input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror </div>
											<br>
											<div class="input-group">
												<input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror </div>
									<br>

											<div class="input-group">
												<br>
												<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror </div>
									<br>

											<div class="input-group">
												<input id="password-confirm" type="password" placeholder="Confirm  Password" class="form-control" name="password_confirmation" required autocomplete="new-password"> </div>
											<br>
											<div class="input-group right">
												<button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End login modal-->

	<!-- Masthead-->
	<header class="masthead" id="{{Request::route()->getName()}}">
		<div class="container">
			<div class="masthead-subheading">Welcome To Our Studio!</div>
			<div class="masthead-heading text-uppercase">It's Nice To Meet You</div> <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> </div>
	</header>
	<div> @yield('content') </div>
	<!-- Footer-->
	<footer class="footer py-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 text-lg-start"> Copyright &copy; Your Website
					<!-- This script automatically adds the current year to your website footer-->
					<!-- (credit: https://updateyourfooter.com/)-->
					<script>
					document.write(new Date().getFullYear());
					</script>
				</div>
				<div class="col-lg-4 my-3 my-lg-0">
					<a class="btn btn-dark btn-social mx-2" href="#!"> <i class="fab fa-twitter"></i> </a>
					<a class="btn btn-dark btn-social mx-2" href="#!"> <i class="fab fa-facebook-f"></i> </a>
					<a class="btn btn-dark btn-social mx-2" href="#!"> <i class="fab fa-linkedin-in"></i> </a>
				</div>
				<div class="col-lg-4 text-lg-end"> <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a> <a class="link-dark text-decoration-none" href="#!">Terms of Use</a> </div>
			</div>
		</div>
	</footer>
	<!-- Portfolio Modals-->
	<!-- Portfolio item 1 modal popup-->
	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-bs-dismiss="modal"> <img src="assets/img/close-icon.svg" alt="Close modal" /> </div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="modal-body">
								<!-- Project details-->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
								<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li> <strong>Client:</strong> Threads </li>
									<li> <strong>Category:</strong> Illustration </li>
								</ul>
								<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"> <i class="fas fa-times me-1"></i> Close Project </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio item 2 modal popup-->
	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-bs-dismiss="modal"> <img src="assets/img/close-icon.svg" alt="Close modal" /> </div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="modal-body">
								<!-- Project details-->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
								<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li> <strong>Client:</strong> Explore </li>
									<li> <strong>Category:</strong> Graphic Design </li>
								</ul>
								<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"> <i class="fas fa-times me-1"></i> Close Project </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio item 3 modal popup-->
	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-bs-dismiss="modal"> <img src="assets/img/close-icon.svg" alt="Close modal" /> </div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="modal-body">
								<!-- Project details-->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
								<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li> <strong>Client:</strong> Finish </li>
									<li> <strong>Category:</strong> Identity </li>
								</ul>
								<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"> <i class="fas fa-times me-1"></i> Close Project </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio item 4 modal popup-->
	<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-bs-dismiss="modal"> <img src="assets/img/close-icon.svg" alt="Close modal" /> </div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="modal-body">
								<!-- Project details-->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
								<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li> <strong>Client:</strong> Lines </li>
									<li> <strong>Category:</strong> Branding </li>
								</ul>
								<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"> <i class="fas fa-times me-1"></i> Close Project </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio item 5 modal popup-->
	<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-bs-dismiss="modal"> <img src="assets/img/close-icon.svg" alt="Close modal" /> </div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="modal-body">
								<!-- Project details-->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
								<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li> <strong>Client:</strong> Southwest </li>
									<li> <strong>Category:</strong> Website Design </li>
								</ul>
								<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"> <i class="fas fa-times me-1"></i> Close Project </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Portfolio item 6 modal popup-->
	<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="close-modal" data-bs-dismiss="modal"> <img src="assets/img/close-icon.svg" alt="Close modal" /> </div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="modal-body">
								<!-- Project details-->
								<h2 class="text-uppercase">Project Name</h2>
								<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
								<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<ul class="list-inline">
									<li> <strong>Client:</strong> Window </li>
									<li> <strong>Category:</strong> Photography </li>
								</ul>
								<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"> <i class="fas fa-times me-1"></i> Close Project </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
</body>

</html>