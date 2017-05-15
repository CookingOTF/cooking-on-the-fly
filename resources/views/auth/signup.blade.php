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
			background-image: url('/img/spaghetti.png');
			width: 100%;
    		height: 100%;
			opacity: 0.4;
			z-index: -1;
		}
	</style>
@stop

@section('content')

	<section class="sign_up_top">
		
	</section>
	<section id="sign_up_container" class="col-xs-11 col-xs-offset-1">

		<h2 class="sign_up_heading">SIGN UP</h2>
		<div class="sign_up">

			<div class="sign_up_content">
				<form action="{{action('AuthController@postRegister')}}" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}

						{{-- <label for="name">Your name</label><br> --}}
					<input type="name" name="name" id="signup_name" class="inpt" required="required" placeholder="FULL NAME">

					<br><br>

						{{-- <label for="email">Your email</label><br> --}}
					<input type="email" name="email" id="signup_email" class="inpt" required="required" placeholder="EMAIL">

					<br><br>

					<input type="username" name="username" id="signup_username" class="inpt" required="required" placeholder="USERNAME">

					<br><br>

						{{-- <label for="password">Your password</label><br> --}}
					<input type="password" name="password" id="signup_password" class="inpt" required="required" placeholder="PASSWORD">

					<br><br>

						{{-- <label for="password">Your password</label><br> --}}
					{{-- <input type="confirm" name="password" id="signup_confirm_password" class="inpt" required="required" placeholder="PASSWORD"> --}}

					<br><br>

					<div class="submit-area">
					<a href=""> <img class="signin_button" src="/img/submit.png"></a>

					<a href="/signin/">Or click here to Sign In!</a>

					</div>
				</form>
			</div>
		</div>
	</section>
@stop