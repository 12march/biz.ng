<!doctype html>


<html lang="en" class="no-js">

<head>
	<title>:: Biz</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="{{ asset('assets/css/triptip-assets.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix white-header-style fullwidth-with-search">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="assets/images/logo-black.png') }}" alt="">
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
                            {{-- <li><a class="active" href="/">Home</a></li> --}}
                            {{-- <li><a href="/index">About</a></li>
							<li><a href="contact.html">Contact</a></li> --}}
						</ul>
					
						<ul class="navbar-nav ml-auto right-list">

                        @guest
                            <li><a href="{{ route('login') }}"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Sign In</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"><i class="fa fa-user-o" aria-hidden="true"></i> Register</a></li>
                            @endif

                        @else
                            
                                {{-- <li><a href="/dashboard"><span class="place-post__rating">Dashboard</span></a></li> --}}
                                <li>        
                                        
                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </li>

                        
                        </ul>
                        <a href="/dashboard"><span class="place-post__rating">Dashboard</span></a>
                        <a href="/listings/create" class="add-list-btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a>
                        @endguest
					</div>
				</div>
			</nav>
		</header>
        <!-- End Header -->
        

        @yield('page')

        
		<!-- footer block module
			================================================== -->
		<footer class="footer footer-black">
			<div class="container">

				<div class="footer__down-part footer__down-part-black">
					<div class="row">
						<div class="col-md-7">
							<p class="footer__copyright">
								© Copyright 2018 - All Rights Reserved
							</p>
						</div>
						<div class="col-md-5">
							<ul class="footer__social-list">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.migrate.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI"></script>
	<script src="{{ asset('assets/js/triptip-plugins.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
	
</body>

</html>