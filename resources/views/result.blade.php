<!DOCTYPE html>
<html lang="en">
<head>
	<title>Go Express Alliance | Tracking Result</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('r_assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('r_assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('r_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('r_assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('r_assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('r_assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('r_assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('r_assets/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('h_assets/assets/css/style.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area" style="background: #0168f4; border-bottom: 2px solid #eee;">
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
                                <li class="nav-item active"><a class="page-scroll" href="/">home</a></li>
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
		<div class="container-table100" style="margin-top: 10px !important;">

			<div id="summary-info">
				<div id="heading">
					<h1>PARCEL DETAILS ARE SHOWN BELOW</h1>
					<p id="tracking-code"><span>Tracking Code:</span> {{ $parcel->code }}</p>
				</div>

				<div id="summary-content">
					<div id="summary-content-1">
						<p class="summary-item"><span>Expected time of pickup:</span> {{ $parcel->pickup_time }}</p>
						<p class="summary-item"><span>Sender Name:</span> {{ $parcel->sender }}</p>
						<p class="summary-item"><span>Parcel Origin:</span> {{ $parcel->origin }}</p>
					</div>

					<div id="summary-content-2">
						<p class="summary-item"><span>Receiver's Name:</span> {{ $parcel->reciever }}</p>
						<p class="summary-item"><span>Receiver's Phone Number:</span> {{ $parcel->reciever_phone }}</p>
						<p class="summary-item"><span>Parcel Destination:</span> {{ $parcel->destination }}</p>
					</div>
				</div>

				<div id="status">
					<p><span>Parcel status:</span> {{ $parcel->status }}</p>
				</div>
			</div>


			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Time/Date</th>
								<th class="column2">Code</th>
								<th class="column3">Location</th>
								<th class="column4">Tracking Event</th>
							</tr>
						</thead>
						<tbody>
								@foreach($parcel->changes as $change)
								<tr>
									<td class="column1">{{ $change->created_at->format('l jS \\of F Y \a\t h:i A') }}</td>
									<td class="column2">{{ $parcel->code }}</td>
									<td class="column3">{{ $change->location }}</td>
									<td class="column4">{{ $change->event }}</td>
								</tr>
								@endforeach							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="/"><img src="{{ asset('h_assets/images/GEA-Logo.png') }}" alt="Logo"></a>
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
	<script src="{{ asset('r_assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('r_assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('r_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('r_assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('r_assets/js/main.js')}}"></script>

</body>
</html>