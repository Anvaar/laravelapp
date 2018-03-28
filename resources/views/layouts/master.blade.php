<!DOCTYPE html>
<head>
	<title>@yield('title')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="{{ asset('public/css/style.css') }}" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- tables -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/table-style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/basictable.css') }}" />
	<!-- toggle btn -->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

	<!--datepicker-->
<!-- 	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap-datepicker.css') }}" /> -->

	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{ asset('public/css/font.css') }}" type="text/css"/>
	<link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<script src="{{ asset('public/js/jquery2.0.3.min.js') }}"></script>
	<script src="{{ asset('public/js/modernizr.js') }}"></script>

	<script src="{{ asset('public/js/jquery.cookie.js') }}"></script>
	<script src="{{ asset('public/js/screenfull.js') }}"></script>
	<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
	</script>
	<!-- charts -->
	<script src="{{ asset('public/js/raphael-min.js') }}"></script>
	<script src="{{ asset('public/js/morris.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('public/css/morris.css') }}">
	<!-- //charts -->
	<!--skycons-icons-->
	<script src="{{ asset('public/js/skycons.js') }}"></script>
	<!--//skycons-icons-->

	<script type="text/javascript" src="{{ asset('public/js/bootstrap-datepicker.min.js') }}"></script>

	<!--//btn toggle-->
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

	<!-- tables -->
	<script type="text/javascript" src="{{ asset('public/js/jquery.basictable.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').basictable();

			$('#table-breakpoint').basictable({
				breakpoint: 768
			});

			$('#table-swap-axis').basictable({
				swapAxis: true
			});

			$('#table-force-off').basictable({
				forceResponsive: false
			});

			$('#table-no-resize').basictable({
				noResize: true
			});

			$('#table-two-axis').basictable();

			$('#table-max-height').basictable({
				tableWrapper: true
			});
		});
	</script>
	<!-- //tables -->


</head>
<body class="dashboard-page">

	<!--navigation-->	
	@include('layouts.navigation')
	<!--navigation-->

	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
				<i class="icon-proton-logo"></i>
				<i class="icon-reorder"></i>
			</a>
		</nav>
		
		<section class="title-bar">
			@include('layouts.header-right')
		</section>
		
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>@yield('heading')</h2>
					</div>

					@if(Session::has('flash_message'))
					<div class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						{{ Session::get('flash_message') }}
					</div>
					@endif

					


			    @if ($errors->any())
			    <div class="alert alert-danger alert-dismissible">
			    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    	<ul>
			    		@foreach ($errors->all() as $error)
			    		<li>{{ $error }}</li>
			    		@endforeach
			    	</ul>
			    </div>
			    @endif 
					
					<div class="panel panel-widget forms-panel">
						
						<div class="forms">
							<h3 class="title1"></h3>
							<div class="form-three widget-shadow">
								@yield('content')

							</div>
						</div>
					</div>
				</div>
				<!-- //input-forms -->
			</div>
		</div>
	
</section>
@include('layouts.footer')

