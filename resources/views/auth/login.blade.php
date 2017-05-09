@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')


<section class="sign_in_container">
	<h1>Sign In</h1>
	<div class="sign_in">
		<div class="sign_in_content">
			<form action="#" method="post">
				<label for="email">Your email</label>
					<br><input type="email" name="email" id="email" class="inpt" required="required" placeholder="Your email">
				<br><br>
				<label for="password">Your password</label>
					<br><input type="password" name="password" id="password" class="inpt" required="required" placeholder="Your password">
				
				<br>
				<input type="checkbox" id="remember" class="checkbox" checked>
						<label for="remember" id="remember_me">Remember me</label><br>
				<br><br>
				<div class="submit-area">
					<input type="submit" value="Sign in" class="submit"><br>
				<a href="#" class="more" id="forgot_password">Forgot your password?</a><br><br><br>
				</div>
			</form>
		</div>
	</div>
</section>

@stop