<!DOCTYPE html>
<html lang="en">
<head>
	<title>Go Express Alliance | Track Item</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('t_assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('t_assets/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('h_assets/css/style.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area" style="background: #0168f4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('h_assets/images/GEA-Logo.png') }}" alt="Logo">
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="/#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="{{ route('result') }}">
					@csrf
					<span class="login100-form-title p-b-26">
						goexpressalliance
					</span>
					<!-- <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span> -->

					<p id="tracking-text">Input tracking number to track item</p>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="code">
						<span class="focus-input100" data-placeholder="Trackig code"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div> -->

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Track
							</button>
						</div>
					</div>

					<!-- <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="#"><img src="{{ asset('h_assets/images/GEA-Logo.png') }}" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@goexpressalliance.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Copyright 2021 <a href="#">Go Express Alliance.</a> All Right Reserved.</p>
                    </div> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
	
<!--===============================================================================================-->
	<script src="{{ asset('t_assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('t_assets/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('t_assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('t_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('t_assets/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('t_assets/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('t_assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('t_assets/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('t_assets/js/main.js') }}"></script>

</body>
</html>