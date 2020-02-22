<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gestove') }} - {{ __('auth.login')}} </title>
    <link rel="icon" type="image/png" href="{{ asset('resources/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/mainLogin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/main.css') }}">
    
</head>
<body>
    <div id="app" class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                @yield('content')
			</div>
		</div>
	</div>
    <div id="dropDownSelect1"></div>

	<script src=" {{asset('resources/vendor/jquery/jquery-3.2.1.min.js')}} "></script>
    <script src=" {{asset('resources/vendor/animsition/js/animsition.min.js')}} "></script>
    <script src=" {{asset('resources/vendor/bootstrap/js/popper.js')}} "></script>
    <script src=" {{asset('resources/vendor/bootstrap/js/bootstrap.min.js')}} "></script>
    <script src=" {{asset('resources/vendor/select2/select2.min.js')}} "></script>
    <script src=" {{asset('resources/vendor/daterangepicker/moment.min.js')}} "></script>
    <script src=" {{asset('resources/vendor/daterangepicker/daterangepicker.js')}} "></script>
    <script src=" {{asset('resources/vendor/countdowntime/countdowntime.js')}} "></script>
    <script src=" {{asset('resources/js/mainLogin.js')}} "></script>
    <script src=" {{asset('resources/js/main.js')}} "></script>
</body>
</html>
