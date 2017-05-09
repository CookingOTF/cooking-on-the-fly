@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')


<br><br><br>
<section class="sign_in_container">
	<h2 class="sign_in_heading">SIGN IN</h2>
	<div class="sign_in">
		<div class="sign_in_content">
			<form action="#" method="post">
				<label for="email" id="signin_email">Your email</label>
					<br><input type="email" name="email" id="email" class="inpt" required="required" placeholder="Your email">
				<br><br>
				<label for="password" id="signin_password">Your password</label>
					<br><input type="password" name="password" id="password" class="inpt" required="required" placeholder="Your password">
				
				<br>
				<input type="checkbox" id="signin_remember" class="checkbox" checked>
						<label for="remember" id="remember_me">Remember me</label><br>
				<br>
				<div class="submit-area">
					<a href=""> <img src="/../../img/darkspoon_button.png">
				<br><br>
				<a href="#" class="more" id="signin_forgot_password">Forgot your password?</a><br><br><br>
				</div>
			</form>
		</div>
	</div>
</section>

@stop