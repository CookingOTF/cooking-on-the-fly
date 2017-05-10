<!DOCTYPE html>
<html>
<<<<<<< HEAD
    <head>
        <title>@yield('title') Cooking on the Fly</title>

        <link rel="stylesheet" type="text/css" href="/css/master.css">

        <link href="https://fonts.googleapis.com/css?family=Economica|Sacramento" rel="stylesheet">
 
    </head>
    <body>
        @yield('navbar')
        {{-- @include('partials.header') --}}

        <div class="container">
    		@yield('content')
        </div>

        @include('partials.footer')
    </body>
=======
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
>>>>>>> 9ae5392c875338e46931c7f04ddf64fd830b6202
</html>
