<!DOCTYPE html>
<html lang="en-us">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="image/x-icon" href="/img/cutlery.ico" />

	<title>@yield('title')Cooking on the Fly</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  		{{-- CUSTOM CSS --}}
		<link rel="stylesheet" type="text/css" href="/css/master.css">
		{{-- CUSTOM JS --}}
		<script type="text/javascript" src="/js/master.js"></script>

		<link href="https://fonts.googleapis.com/css?family=BenchNine:300|Sofia" rel="stylesheet">
 
		@yield('custom_css')

</head>
<body>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	@yield('navbar')
	{{-- @include('partials.header') --}}

	<div class="content_container">
			@yield('content')
	</div>

	<div class="footer">
		<p>
			@include('partials.footer')
		</p>
	</div>
</body>
</html>
