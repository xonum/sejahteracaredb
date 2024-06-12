<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>SejahteraCare</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('/assets/page/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('/assets/page/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('/assets/page/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('/assets/page/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('/assets/page/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('/assets/page/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('/assets/page/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('/assets/page/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('/assets/page/css/magnific-popup.css')}}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('/assets/page/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/page/style.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/page/css/responsive.css')}}">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <img src="{{asset('/assets/images/logo.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							{{-- <ul class="top-link">
								<li><a href="#">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul> --}}
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>03 – 6421 4444</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:healthcentre@iium.edu.my">healthcentre@iium.edu.my</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="/"><img  src="{{asset('/assets/images/iium_rce_greater_gombak_logo.webp')}}" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="/">Home </a></li>
											<li><a href="/about">About </a></li>
											<li><a href="/doctors">Doctors </a></li>
											<li><a href="/faq">FAQ </a></li>
											<li><a href="/contact">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote" style="
									display: flex;
									align-items: center;
									flex-direction: column;">
									<a href="/login" class="btn">Login</a>
								<span style="
									font-size: 9px;
									color: #0000FF;
									text-decoration: underline;">
									Login to book for an appointment
								</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Our Doctors</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	
		<!-- Start Portfolio Details Area -->
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							
								
								<!-- Add a heading for "Category" -->
								<div class="m-auto">
									@foreach($doctors->groupBy('designation') as $designation => $doctors)
									<!-- Add a heading for the designation -->
									<h3 style="margin-bottom: 20px; text-align: center;">{{ $designation }}</h3>
									<div class="row row-cards" style="display: flex;justify-content: center;">
										@foreach($doctors as $doctor)
											<div class="col-md-6 col-lg-3 mb-5">
												<div class="card" style="background-color: #5235c5;">
													<!-- Photo -->
													<div class="img-responsive img-responsive-21x9 card-img-top m-auto" style="width:auto">
														<img style="height: 175px" src="{{ $doctor->profile_picture ?? asset('/assets/images/default-pro.jpg') }}" alt="">
													</div>
													<div class="card-body">
														<h6 class="card-title" style="color: white; font-weight:bold;">{{ $doctor->firstname . ' ' . $doctor->lastname }}</h6>
														<p class="card-title" style="font-size: 11px; color: white;"><strong>Designation:</strong> {{ $doctor->designation }}</p>
														<p class="card-title" style="font-size: 11px; color: white;"><strong>Phone:</strong> {{ $doctor->phone }}</p>
														<p class="card-title" style="font-size: 11px; color: white;"><strong>Email:</strong> {{ $doctor->email }}</p>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								@endforeach
								</div>
								

								
								
								
								
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="single-footer">
								<img src="{{asset('/assets/images/footer-banner.jpeg')}}" alt="footer-banner" style="margin-bottom: 30px;">
								<p style="margin-bottom: 5px;">
									<strong>Address:</strong> International Islamic University Malaysia, <br>Jalan Gombak, 53100, WP Kuala Lumpur
								</p>
								<p style="margin-bottom: 5px;">
									<strong>Tel:</strong> 03-6421 4444 <br> <strong>Email:</strong> healthcentre@iium.edu.my
								</p>
								
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="/about"><i class="fa fa-caret-right" aria-hidden="true"></i>About</a></li>
											<li><a href="/doctors"><i class="fa fa-caret-right" aria-hidden="true"></i>Doctors</a></li>
											<li><a href="/faq"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="/contact"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Opening Hours</h2>
								<ul class="time-sidual">
									<li class="day">Monday - Friday <span>8.00-11.45am</span></li>
									<li class="day">&nbsp;&nbsp;&nbsp; <span>2.00-3.45pm</span></li>
									<li class="day">Weekdays & Public Holidays <span>CLOSED</span></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  All Rights Reserved by SejahteraCare </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="{{asset('/assets/page/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('/assets/page/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('/assets/page/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{asset('/assets/page/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{asset('/assets/page/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{asset('/assets/page/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('/assets/page/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('/assets/page/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('/assets/page/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('/assets/page/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('/assets/page/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('/assets/page/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('/assets/page/js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{asset('/assets/page/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{asset('/assets/page/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{asset('/assets/page/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('/assets/page/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('/assets/page/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{asset('/assets/page/js/main.js')}}"></script>
    </body>
</html>