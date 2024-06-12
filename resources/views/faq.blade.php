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
			.accordion {
    display: flex;
    flex-direction: column;
    font-family: "Sora", sans-serif;
    max-width: 991px;
    min-width: 320px;
    margin: 50px auto;
    padding: 0 50px;
}
.accordion h1 {
    font-size: 32px;
    text-align: center;
}
.accordion-item {
    margin-top: 16px;
    border: 1px solid #c1bdbd;
    border-radius: 6px;
    background: #ffffff;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;
}
.accordion-item .accordion-item-title {
    position: relative;
    margin: 0;
    display: flex;
    width: 100%;
    font-size: 15px;
    cursor: pointer;
    justify-content: space-between;
    flex-direction: row-reverse;
    padding: 14px 20px;
    box-sizing: border-box;
    align-items: center;
}
.accordion-item .accordion-item-desc {
    display: none;
    font-size: 14px;
    line-height: 22px;
    font-weight: 300;
    color: #444;
    border-top: 1px dashed #ddd;
    padding: 10px 20px 20px;
    box-sizing: border-box;
}
.accordion-item input[type="checkbox"] {
    position: absolute;
    height: 0;
    width: 0;
    opacity: 0;
}
.accordion-item input[type="checkbox"]:checked ~ .accordion-item-desc {
    display: block;
}
.accordion-item
    input[type="checkbox"]:checked
    ~ .accordion-item-title
    .icon:after {
    content: "-";
    font-size: 20px;
}
.accordion-item input[type="checkbox"] ~ .accordion-item-title .icon:after {
    content: "+";
    font-size: 20px;
}
.accordion-item:first-child {
    margin-top: 0;
}
.accordion-item .icon {
    margin-left: 14px;
}

@media screen and (max-width: 767px) {
    .accordion {
        padding: 0 16px;
    }
    .accordion h1 {
        font-size: 22px;
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
											<li><a href="#">FAQ </a></li>
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
							<h2>Frequently Asked Questions</h2>
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
							<div class="accordion">
								<div class="accordion-item">
									<input type="checkbox" id="accordion1">
									<label for="accordion1" class="accordion-item-title font-weight-bold"><span class="icon"></span>Where is your location?</label>
									<div class="accordion-item-desc font-weight-bold">Our Health Center located in Jalan Gombak, 53100, Kuala Lumpur next to Kulliyyah Of Economics.</div>
								</div>

								<div class="accordion-item">
									<input type="checkbox" id="accordion2">
									<label for="accordion2" class="accordion-item-title font-weight-bold"><span class="icon"></span>Do I need a medical card in IIUM HealthCentre?</label>
									<div class="accordion-item-desc font-weight-bold">Please kindly refer to our website for information or you may call us directly at 03-64214444 for further clarification.</div>
								</div>

								<div class="accordion-item">
									<input type="checkbox" id="accordion3">
									<label for="accordion3" class="accordion-item-title font-weight-bold"><span class="icon"></span>How do I make an appointment?</label>
									<div class="accordion-item-desc font-weight-bold">You may directly book online for an appointment and for further assistance contact us via phone.</div>
								</div>

								<div class="accordion-item">
									<input type="checkbox" id="accordion4">
									<label for="accordion4" class="accordion-item-title font-weight-bold"><span class="icon"></span>What are your outpatient operating hours?</label>
									<div class="accordion-item-desc font-weight-bold">Our Outpatient Clinics operates from 8.00am to 5.00pm (Monday to Friday) with break intervals 12.00pm to 1.00pm. Saturday-Sunday and Public holidays closed.</div>
								</div>

								<div class="accordion-item">
									<input type="checkbox" id="accordion5">
									<label for="accordion5" class="accordion-item-title font-weight-bold"><span class="icon"></span>Are there any Dental Packages?</label>
									<div class="accordion-item-desc font-weight-bold">Yes, we have a dental office: Normal walk-in for registration and operating hours from 8am-3.30pm.</div>
								</div>

								<div class="accordion-item">
									<input type="checkbox" id="accordion6">
									<label for="accordion6" class="accordion-item-title font-weight-bold"><span class="icon"></span>My questions are not listed here, what can I do?</label>
									<div class="accordion-item-desc font-weight-bold">Please contact us at 03-64214444 or email healthcar@iium.edu.my for further assistance.</div>
								</div>

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