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
		.alert-container {
    position: fixed;
    top: 70px;
    right: 10px;
    z-index: 9999;
}
    </style>
	<link rel="stylesheet" href="{{ asset('/assets/login.css') }}">
	</head>
	<body class="img js-fullheight" style="">
		<!-- Alert -->
            <div class="alert-container">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z">
                                </path>
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z">
                                </path>
                            </svg>
                        </div>
                        <div class="pt-1">
                            <h4 class="alert-title">{{ session('success') }}</h4>
                        </div>
                    </div>
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z">
                                </path>
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z">
                                </path>
                            </svg>
                        </div>
                        <div class="pt-1">
                            <h4 class="alert-title">{{ session('error') }}</h4>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- End Alert -->
	<section class="ftco-section">
		<div class="container ds">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sejahtera<span style="color:#01cabd">Care</span></h2>
				</div>
			</div>
            <form method="POST" action="{{ route('register') }}">
        	@csrf
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	{{-- <h3 class="mb-4 text-center">Have an account?</h3> --}}
		      	<form action="#" class="signin-form">
		      	<div class="form-group">
		      		<input type="text" class="form-control rounded" placeholder="Matric ID" name="username"
								value="{{ old('username') }}"
					required>
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />

		      	</div>
				<div class="form-group">
		      		<input type="text" class="form-control rounded" placeholder="Firstname" name="firstname"
								value="{{ old('firstname') }}"
					required>
                                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />

		      	</div>
				<div class="form-group">
		      		<input type="text" class="form-control rounded" placeholder="Lastname" name="lastname"
								value="{{ old('lastname') }}"
					required>
                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />

		      	</div>
				<div class="form-group">
		      		<input type="text" class="form-control rounded" placeholder="Phone Number" name="phone"
								value="{{ old('phone') }}"
					required>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />

		      	</div>
				<div class="form-group">
		      		<input type="email" class="form-control rounded" placeholder="Email Address" name="email"
								value="{{ old('email') }}"
					required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

		      	</div>
	            <div class="form-group">
    <input id="password-field" type="password" class="form-control rounded" name="password" placeholder="Password" required>
    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<div class="form-group">
    <input id="password-confirm-field" type="password" class="form-control rounded" name="password_confirmation" placeholder="Confirm Password" required>
    <span toggle="#password-confirm-field" class="fa fa-fw fa-eye field-icon toggle-password-confirm"></span>
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
	            	<button type="submit" class="form-control btn rounded submit px-3" style="background-color: #01cabd;font-weight: 900;font-size: large;">Register</button>

					
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Already have an account? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="{{ route('login') }}" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>Login</a>
	          </div>
		      </div>
				</div>
			</div>
            </form>
		</div>
	</section>

    <script>
    $(document).ready(function() {
		setTimeout(function () {
        // $(".alert").addClass("fade-to-right");
        $(".alert").fadeOut("slow");
    }, 3000);
        // Toggle for the password field
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        // Toggle for the password confirmation field
        $(".toggle-password-confirm").click(function() {
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

