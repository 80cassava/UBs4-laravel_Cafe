<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ config('app.name', 'Cafe.in') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('coffee/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('coffee/css/style.css') }}">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}">Cafe<small>.in</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <i class="fas fa-bars"></i> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ route('menu') }}" class="nav-link">Menu</a></li>
	          <!-- <li class="nav-item cart"><a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i><span class="bag d-flex justify-content-center align-items-center"><small>2</small></span></a></li> -->
            @guest
              <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><b>Login</b></a></li>
            @else
              <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link"><b>Dashboard</b></a></li>
            @endguest
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

<!-- ------------------------------------------------------------------------------------------------------------------- -->
            @yield('content')
<!-- ------------------------------------------------------------------------------------------------------------------- -->

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="ftco-animate"><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><i class="fas fa-map-marker-alt"></i> <span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><i class="fas fa-phone"></i>+2 392 3929 210</span></a></li>
	                <li><a href="#"><i class="fas fa-at"></i><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 💙 by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('coffee/js/jquery.min.js') }}"></script>
  <script src="{{ asset('coffee/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('coffee/js/popper.min.js') }}"></script>
  <script src="{{ asset('coffee/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('coffee/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('coffee/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('coffee/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('coffee/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('coffee/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('coffee/js/aos.js') }}"></script>
  <script src="{{ asset('coffee/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('coffee/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('coffee/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('coffee/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('coffee/js/google-map.js') }}"></script>
  <script src="{{ asset('coffee/js/main.js') }}"></script>
    
  </body>
</html>