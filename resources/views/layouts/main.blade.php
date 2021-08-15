<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Prem Steel Works</title>
	    <meta name="description" content="Stainless Steel Railings & Gates, Wrought Iron Railings & Doorways, Wrought Iron Staircase Railing, Wrought Iron Parapet Railing, SS Gates, Automated Remote Gate, Aluminium Gate, Antique Symbol, Tensile Structures, Tensile Sheds, Glass Railing">
		<meta name="keywords" content="Stainless Steel Railings & Gates, Wrought Iron Railings & Doorways, Wrought Iron Staircase Railing, Wrought Iron Parapet Railing, SS Gates, Automated Remote Gate, Aluminium Gate, Antique Symbol, Tensile Structures, Tensile Sheds, Glass Railing">

		<!-- responsive meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- For IE -->
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- master stylesheet -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<!-- Responsive stylesheet -->
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	    <!-- Favicon -->
	    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	</head>
	<body>
		<!--Start header area-->
		@include('layouts.header')
		<!--End header area-->  

		@yield('content')

		<!--Start footer area-->
		@include('layouts.footer')
		<!--End footer area-->

		<!-- main jQuery -->
		<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<!-- bootstrap -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
				
		<!-- revolution slider js -->
		<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

		<!-- thm custom script -->
		<script src="{{ asset('js/custom.js') }}"></script>
	</body>
</html>