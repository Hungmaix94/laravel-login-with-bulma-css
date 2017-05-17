<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Admin</title>

	<!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('res/bulma-0.4.1/css/bulma.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('res/css/uploadFile.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('res/css/style.css')}}">

	<!-- Scripts -->
	<script>
		window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
		]) !!};
	</script>
</head>
<body>
	<div class="columns">	
		<aside class="column is-narrow hero is-fullheight is-hidden-mobile">
			@include('vendor.menu')
		</aside>

		<div class="column admin-panel">
			@include('vendor.header')

			@yield('content')
		</div>
	</div>
	<!-- Scripts -->
</body>
</html>
