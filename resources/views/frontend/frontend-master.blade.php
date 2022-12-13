<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora | @yield('title')</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend-assets/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend-assets/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend-assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend-assets/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend-assets/css/responsive.css">

  </head>
  <body>
   
    @include('frontend.includes.header')

        @yield('content')

    @include('frontend.includes.footer')
    
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{ asset('/') }}frontend-assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="{{ asset('/') }}frontend-assets/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="{{ asset('/') }}frontend-assets/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="{{ asset('/') }}frontend-assets/js/bxslider.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}frontend-assets/js/script.slider.js"></script>
  </body>
</html>