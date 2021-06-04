<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Travel</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="css/responsive.css" />


	</head>
	<style>
		.travel-box{
			padding-top: 15%;
		}
	</style>
	<body>
	
		<form action="addVole" method="POST">
		<section  class="travel-box">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">

								<ul class="nav nav-tabs" role="tablist">



									<li role="presentation">
									 	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
									 		<i class="fa fa-plane"></i>
									 		flights
									 	</a>
									</li>
								</ul>

							
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane active fade in" id="tours">
										<div class="tab-para">

											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>destination</h2>

														<div class="form-group">
															@csrf
															<input type="text" class="form-control" name="lieu_depart" placeholder="départ">
														</div>

														<div class="form-group">
															@csrf
															<input type="text" class="form-control" name="lieu_arrivee" placeholder="arrivée">
														</div>

													</div>
												</div>

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check in</h2>
														<div class="travel-check-icon">
															
																@csrf
																<input type="date" name="date_dpr" class="form-control"  placeholder="12 -01 - 2017 ">
														
														</div>
													</div>
												</div>

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check out</h2>
														<div class="travel-check-icon">
															
																@csrf
																<input type="date" name="date_arv" class="form-control"   placeholder="22 -01 - 2017 ">
															
														</div>
													</div>
												</div>

											
												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>plane</h2>
														<div class="form-group">
															@csrf
															<input type="text" class="form-control" name="avion" placeholder="plane">
														</div>
													</div>
												</div>

												

											</div>

											<div class="row">
												<div class="col-sm-5">
													<div class="travel-budget">
														<div class="row">
															<div class="col-md-3 col-sm-4">
																<h3>price:</h3>
															</div>
															<div class="co-md-9 col-sm-8">
																@csrf	
																<input type="text" class="form-control" name="prix" placeholder="$$$">
															</div>
														</div>
													</div>
												</div>
												<div class="clo-sm-7">
													<div class="about-btn travel-mrt-0 pull-right">
														<button  class="about-view travel-btn" type="submit">
															ADD	
														</button>
													</div>
												</div>

											</div>

										</div>

									

								</div>
							</div>
        				</div>
        			</div>
        		</div>
        	</div>

        </section>
	</form>



@csrf


		<script src="js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="js/custom.js"></script>


	</body>

</html>