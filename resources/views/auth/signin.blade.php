@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')



<section class="sign_in_container">

	<h2 class="sign_in_heading">SIGN IN</h2>
	<div class="sign_in">

		<div class="sign_in_content">

			<form action="#" method="post">
			{{-- <br> --}}
				{{-- <label for="email" id="signin_email">Your email</label> --}}
				<input type="email" name="email" id="signin_email" class="inpt" required="required" placeholder="EMAIL">

				<br><br>

				{{-- <label for="password" id="signin_password">Your password</label> --}}
				<input type="password" name="password" id="signin_password" class="inpt" required="required" placeholder="PASSWORD">

				<br>

				<div class="sign_in_remember_me">
					<input type="checkbox" id="signin_remember" class="checkbox" checked>
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