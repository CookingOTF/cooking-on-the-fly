<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title') Cooking on the Fly</title>

		<link rel="stylesheet" type="text/css" href="/css/master.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<link href="https://fonts.googleapis.com/css?family=BenchNine:300|Sofia" rel="stylesheet">
 
	</head>
	<body>
		<!-- Latest compiled and minified JavaScript -->
		@yield('navbar')
		{{-- @include('partials.header') --}}

		<div class="content_container">
			@yield('content')
		</div>

		@include('partials.footer')

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
