<!doctype html>
<html lang="en">
  <head>
  	<title>SejahteraCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>
        body {
            background-image: url('assets/images/login-bg.png');
            background-size: cover; /* Cover the entire page */
            background-position: center; /* Center the background image */
			
        }
    </style>
	<link rel="stylesheet" href="{{ asset('/assets/login.css') }}">
	</head>
	<body class="img js-fullheight" style="">
	<section class="ftco-section">
		<div class="container ds">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sejahtera<span style="color:#01cabd">Care</span></h2>
				</div>
			</div>
            <form method="POST" action="{{ route('login') }}">
        @csrf
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	{{-- <h3 class="mb-4 text-center">Have an account?</h3> --}}
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded" placeholder="Email Address" name="email" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control rounded" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            
	            {{-- <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div> --}}
                <div class="form-group">
<button type="submit" class="form-control btn rounded submit px-3" style="background-color: #01cabd;font-weight: 900;font-size: large;">Login</button>	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; First Time User? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="{{ route('register') }}" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2" style="font-weight: 900;font-size: large;"></span>Register</a>
	          </div>
		      </div>
				</div>
			</div>
            </form>
		</div>
	</section>

    <script>
         $(document).ready(function() {
            $(".toggle-password").click(function () {
				$(this).toggleClass("fa-eye fa-eye-slash");
				var input = $($(this).attr("toggle"));
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});
         });
    </script>

	</body>
</html>

