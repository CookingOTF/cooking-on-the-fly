@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')

	<section id="sign_up_container" class="col-xs-8 col-xs-offset-4">

		<h2 class="sign_up_heading">SIGN UP</h2>
		<div class="sign_up">

			<div class="sign_up_content">
				<form action="#" method="post" enctype="multipart/form-data">

						{{-- <label for="name">Your name</label><br> --}}
					<input type="name" name="name" id="signup_name" class="inpt" required="required" placeholder="FULL NAME">

					<br><br>

						{{-- <label for="email">Your email</label><br> --}}
					<input type="email" name="email" id="signup_email" class="inpt" required="required" placeholder="EMAIL">

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