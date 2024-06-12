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

		<style>
			@media (max-width: 768px) {
				.slider-btns {
					display: flex;
					justify-content: center;
				}
			}
		</style>
		
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
		
		
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							{{-- <ul class="top-link">
								<li><a href="/about">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="/contact">Contact</a></li>
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
		
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{asset('/assets/page/img/slider1.png')}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Sejahtera<span>Care</span></h1>
									<h3 class="text-white">We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h3>
									{{-- <div class="button slider-btns">
										<a href="/login" class="btn">Get Appointment</a>
										<a href="/contact" class="btn primary">Contact Now</a>
									</div> --}}
									<div class="button">
										<a href="/login" class="btn">Get Appointment</a>
										<a href="/contact" class="btn primary">Contact</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{asset('/assets/page/img/slider2.png')}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Sejahtera<span>Care</span></h1>
									<h3 class="text-white">We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h3>
									<div class="button">
										<a href="/login" class="btn">Get Appointment</a>
										<a href="/contact" class="btn primary">Contact</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{asset('/assets/page/img/slider3.png')}}')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Sejahtera<span>Care</span></h1>
									<h3 class="text-white">We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h3>
									<div class="button">
										<a href="/login" class="btn">Get Appointment</a>
										<a href="/contact" class="btn primary">Contact</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Start Schedule Area -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first infirst">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<h4>Emergency Contact</h4>
										<h5 class="text-white">(AMBULANCE)</h5>
										<p>(+60)3 6421 4444</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<h4>Opening Hours</h4>
										<ul class="time-sidual">
											<li class="day">Monday - Friday <span>8.00-11.45am</span></li>
											<li class="day">&nbsp;&nbsp;&nbsp; <span>2.00-3.45pm</span></li>
											<li class="day">Weekdays & Public Holidays <span>CLOSED</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<h4>Dental Opening Hours</h4>
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
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="{{asset('/assets/page/img/section-img.png')}}" alt="#">
							{{-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p> --}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<h3>Emergency Help</h3>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>Enriched Pharmecy</h3>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-stethoscope"></i>
							</div>
							<h3>Medical Treatment</h3>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need contact us now? Call @ (+60)3-64214444</h2>
							<div class="button mt-5">
								<a href="/contact" class="btn">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		
		
		
		
	
		
		
		
		
		
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