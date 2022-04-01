<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Doccure</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			
            @include('docure.layouts.header')			  

            @section('main-content')
            @show

            @include('docure.layouts.footer')




			
		   
	        </div>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Slick JS -->
		<script src="{{ asset('assets/js/slick.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>