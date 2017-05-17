<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="{{asset('/css/uploadFile.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bulma.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/morris.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/admin.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/random.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">


	<!-- Scripts -->
	<script>
		window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
		]) !!};
	</script>
</head>
<body>


	<div id="app">
		
		<div class="columns">	
			<aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
				@include('vendor.menu')
			</aside>

			<div class="column is-10 admin-panel">
				@include('vendor.header')

				@yield('content')
			</div>
		</div>
	</div>


	<!-- Scripts -->

</body>
</html>
