<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bosch | Campaña de Fidelización</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="">

	<!-- if NODE_ENV='DEVELOPMENT' -->
		<link rel="stylesheet" href="{{ asset('assets/css/application.css') }}">
	<!-- endif -->
	<!-- if NODE_ENV='PRODUCTION' -->
		<!--
		<link rel="stylesheet" href="assets/css/application.min.css">
		-->
	<!-- endif -->
</head>
<body>

	<!-- remove this section to prevent loading splash -->
	@if( Auth::guest() )
	<div class="page loading">
		<div class="slice1"></div>
		<div class="slice2"></div>
	</div>
	@endif

	<div ui-view class="ng-scope">
	@section('main')
		@if( Auth::user() )
			<aside role="navigation" ui-view="sidebar" class="ng-scope">
				@include('sidebar')
			</aside>
			<div class="wrapper ng-scope ng-isolate-scope" ux-lamp>
				@include('navbar')
				<main role="main" ui-view="content"></main>
			</div>
		@endif
	@show
	</div>

	<!-- if NODE_ENV='DEVELOPMENT' -->
		<!-- build:js assets/js/application.js -->
		<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
		<script src="{{ asset('bower_components/angular-animate/angular-animate.js') }}"></script>
		<script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.js') }}"></script>
		<script src="{{ asset('bower_components/angular-touch/angular-touch.js') }}"></script>
		<script src="{{ asset('bower_components/angular-ui-router/release/angular-ui-router.js') }}"></script>
		<script src="{{ asset('bower_components/oclazyload/dist/ocLazyLoad.js') }}"></script>
		<script src="{{ asset('assets/js/router/routes.js') }}"></script>
		<script src="{{ asset('assets/js/application.js') }}"></script>
		<!-- endbuild -->
	<!-- endif -->

	<!-- if NODE_ENV='PRODUCTION' -->
		<!-- build:js assets/js/application.min.js -->
		<!--
		<script src="../bower_components/angular/angular.js"></script>
		<script src="../bower_components/angular-animate/angular-animate.js"></script>
		<script src="../bower_components/angular-sanitize/angular-sanitize.js"></script>
		<script src="../bower_components/angular-touch/angular-touch.js"></script>
		<script src="../bower_components/angular-ui-router/release/angular-ui-router.js"></script>
		<script src="../bower_components/oclazyload/dist/ocLazyLoad.js"></script>
		<script src="assets/js/router/routes.js"></script>
		<script src="assets/js/application.js"></script>
		-->
		<!-- endbuild -->
	<!-- endif -->
	@if( Auth::user() )
		<script>
			angular.module('ui.routes').constant("CSRF_TOKEN", '{{ csrf_token() }}');
		</script>
	@endif
</body>
</html>
