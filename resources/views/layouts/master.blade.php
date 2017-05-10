<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title') Cooking on the Fly</title>

		<link rel="stylesheet" type="text/css" href="/css/master.css">

		<link href="https://fonts.googleapis.com/css?family=BenchNine:300|Sofia" rel="stylesheet">
 
	</head>
	<body>
		@yield('navbar')
		{{-- @include('partials.header') --}}

		<div class="container">
			@yield('content')
		</div>

		@include('partials.footer')
	</body>
</html>
