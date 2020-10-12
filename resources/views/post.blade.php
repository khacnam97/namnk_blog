<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />

         <!-- CSS here -->
          <link rel="stylesheet" href="public/css/bootstrap.min.css">
          <link rel="stylesheet" href="public/css/owl.carousel.min.css">
          <link rel="stylesheet" href="public/css/slicknav.css">
          <link rel="stylesheet" href="public/css/animate.min.css">
          <link rel="stylesheet" href="public/css/magnific-popup.css">
          <link rel="stylesheet" href="public/css/fontawesome-all.min.css">
          <link rel="stylesheet" href="public/css/themify-icons.css">
          <link rel="stylesheet" href="public/css/themify-icons.css">
          <link rel="stylesheet" href="public/css/slick.css">
          <link rel="stylesheet" href="public/css/nice-select.css">
          <link rel="stylesheet" href="public/css/style.css">
          <link rel="stylesheet" href="public/css/responsive.css">
    </head>
    <body>
        <div id="app">
          <my-component></my-component>
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
        <script src="./js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./js/owl.carousel.min.js"></script>
        <script src="./js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./js/wow.min.js"></script>
		<script src="./js/animated.headline.js"></script>
        <script src="./js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./js/jquery.nice-select.min.js"></script>
		<script src="./js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./js/contact.js"></script>
        <script src="./js/jquery.form.js"></script>
        <script src="./js/jquery.validate.min.js"></script>
        <script src="./js/mail-script.js"></script>
        <script src="./js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./js/plugins.js"></script>
        <script src="./js/main.js"></script>
</html>