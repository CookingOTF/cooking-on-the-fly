@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop


@section('custom_css')
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
			background-image: url('/img/pasta.png');
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
	<div class="sign_in">

		<div class="sign_in_content">

			<form action="{{action('AuthController@postRegister')}}" method="post">
			{!! csrf_field() !!}
			{{-- <br> --}}
				{{-- <label for="email" id="signin_email">Your email</label> --}}
				<input type="username" name="username" id="signin_username" class="inpt" required="required" placeholder="USERNAME">

				<br><br>

				{{-- <label for="password" id="signin_password">Your password</label> --}}
				<input type="password" name="password" id="signin_password" class="inpt" required="required" placeholder="PASSWORD">

				<br>

				<div class="sign_in_remember_me">
					<input type="checkbox" id="signin_checkbox" class="checkbox" checked>
						<label for="remember" id="signin_remember_me">Remember me</label>
				</div>
				<br><br>

				<div class="submit-area">
					<a href=""> <img class="signin_button" src="/img/submit.png"></a>

				<br><br>

				<a href="#" class="more" id="signin_forgot_password">Forgot your password?</a><br>
				</div>
			</form>
		</div>
	</div>
</section>


@stop