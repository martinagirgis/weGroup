<!DOCTYPE html>
 <html lang="zxx">

    <head>

    	<!-- Metas -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keywords" content="HTML5 Template Bemax onepage themeforest" />
		<meta name="description" content="Bemax - Onepage Multi-Purpose HTML5 Template" />
		<meta name="author" content="" />

		<!-- Title  -->
		<title>Bemax</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('/assets/site/img/favicon.ico')}}" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
		
		<!-- Plugins -->
		<link rel="stylesheet" href="{{asset('/assets/site/css/plugins.css')}}" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="{{asset('/assets/site/css/style.css')}}" />

    </head>

    <body>

        <div class="loading">
    		<div class="text-center middle">
    			<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    		</div>
    	</div>

        @extends('includes.site.nav')

        @yield('header')

        @yield('about')

        @yield('quote')

        @yield('portfolio')

        @yield('statistic')

        @yield('services')

        @yield('team')

        @yield('peopleTooking')

        @yield('latestWork')

        @yield('clientsLogos')

        @yield('contact')

        @extends('includes.site.footer')

         <!-- jQuery -->
		<script src="{{asset('/assets/site/js/jquery-3.0.0.min.js')}}"></script>
		<script src="{{asset('/assets/site/js/jquery-migrate-3.0.0.min.js')}}"></script>

		<!-- popper.min -->
		<script src="{{asset('/assets/site/js/popper.min.js')}}"></script>

	  	<!-- bootstrap -->
		<script src="{{asset('/assets/site/js/bootstrap.min.js')}}"></script>

		<!-- scrollIt -->
		<script src="{{asset('/assets/site/js/scrollIt.min.js')}}"></script>

		<!-- animated.headline -->
		<script src="{{asset('/assets/site/js/animated.headline.js')}}"></script>

		<!-- jquery.waypoints.min -->
		<script src="{{asset('/assets/site/js/jquery.waypoints.min.js')}}"></script>

		<!-- jquery.counterup.min -->
		<script src="{{asset('/assets/site/js/jquery.counterup.min.js')}}"></script>

		<!-- owl carousel -->
		<script src="{{asset('/assets/site/js/owl.carousel.min.js')}}"></script>

		<!-- jquery.magnific-popup js -->
		<script src="{{asset('/assets/site/js/jquery.magnific-popup.min.js')}}"></script>

		<!-- stellar js -->
		<script src="{{asset('/assets/site/js/jquery.stellar.min.js')}}"></script>

      	<!-- isotope.pkgd.min js -->
      	<script src="{{asset('/assets/site/js/isotope.pkgd.min.js')}}"></script>

        <!-- YouTubePopUp.jquery -->
        <script src="{{asset('/assets/site/js/YouTubePopUp.jquery.js')}}"></script>

        <!-- Map -->
        <script src="{{asset('/assets/site/js/map.js')}}"></script>

      	<!-- validator js -->
      	<script src="{{asset('/assets/site/js/validator.js')}}"></script>

      	<!-- custom scripts -->
        <script src="{{asset('/assets/site/js/scripts.js')}}"></script>

    </body>
</html>