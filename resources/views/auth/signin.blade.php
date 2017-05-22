@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop


@section('custom_css')
	<link rel="stylesheet" href="/css/auth.css">
	<style type="text/css">
		body {
			position: relative;
		}

		body:after{
			content : "";
		    display: block;
		    position: absolute;
		    top: 0;
		    left: 0;
			background-image: url('/img/pasta.png') !important;
			/*object-fit:cover*/
			background-size: cover;
			width: 100%;
    		height: 100%;
			opacity: 0.4;
			z-index: -1;
		}
	</style>
@stop

@section('content')

<section class="sign_in_top">
	
</section>

<section id="sign_in_container" class="col-xs-5 col-xs-offset-7">

	<h2 class="sign_in_heading">SIGN IN</h2>
	<div class="row sign_in">

		<div class="sign_in_content">

			<form action="{{ action('Auth\AuthController@postLogin') }}/" method="post">
				{!! csrf_field() !!}
				<div>
					<label class="sr-only" for="username">Username</label>
					<input
						type="text"
						name="username"
						id="username"
						class="inpt"
						placeholder="USERNAME"
						value="{{old('username')}}"
						{{ $errors->has('username') ? 'aria-describedby="error-username"' : '' }}
						required>

					@if ($errors->has('username'))
						<span class="help-block" id="error-username">
							{{ $errors->first('username') }}
						</span>
					@endif
				</div>

				<br><br>
				
				<div>
					<label for="password" class="sr-only">Password</label>
					<input
						type="password"
						name="password"
						id="password"
						class="inpt"
						placeholder="PASSWORD"
						{{ $errors->has('password') ? 'aria-describedby="error-password"' : '' }}
						required>
					@if ($errors->has('password'))
						<span class="help-block" id="error-password">
							{{ $errors->first('username') }}
						</span>
					@endif
				</div>

				<br>

				<div>
					<input type="checkbox" id="signin_checkbox" class="checkbox" checked>
					<label id="signin_remember_me" for="signin_checkbox">Remember me</label>
				</div>

				<br><br>

				<div>
					<button type="submit" class="btn btn-default">SUBMIT</button>
				</div>

				<br><br>
				
				<div class="row">
					<a href="#" class="more" id="forgot_password">
						FORGOT YOUR PASSWORD?
					</a>
				</div>


			</form>
		</div>
	</div>
</section>
@stop
@section('content')


<div class="row sign_in_bottom">
</div>

@stop