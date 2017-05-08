@extends('layouts.master')
@section('content')


	<section class="container">
		<article class="half">
			<h1></h1>
			<div class="tabs">
				<span class="tab signin active"><a href="#signin">Sign in</a></span>
				<span class="tab signup"><a href="#signup">Sign up</a></span>
			</div>

			<div class="signup_signin">
				<div class="signin_content">
					<form action="#" method="post" enctype="multipart/form-data">
						<input type="email" name="email" id="email" class="inpt" required="required" placeholder="Your email">
							<label for="email">Your email</label><br>
						<input type="password" name="password" id="password" class="inpt" required="required" placeholder="Your password">
								<label for="password">Your password</label><br>
						<input type="checkbox" id="remember" class="checkbox" checked>
								<label for="remember">Remember me</label><br>
						<div class="submit-area">
							<input type="submit" value="Sign in" class="submit"><br>
						<a href="#" class="more">Forgot your password?</a><br>
						</div>
					</form>
				</div>

				<div class="signup_content">
					<form action="#" method="post" enctype="multipart/form-data">
						<input type="name" name="name" id="name" class="inpt" required="required" placeholder="Your name">
							<label for="name">Your name</label><br>
						<input type="email" name="email" id="email" class="inpt" required="required" placeholder="Your email">
							<label for="email">Your email</label><br>
						<input type="password" name="password" id="password" class="inpt" required="required" placeholder="Your password">
							<label for="password">Your password</label><br>
						<div class="submit-area">
							<input type="submit" value="Sign up" class="submit"><br>
						</div>
					</form>
				</div>
			</div>
		</article>
		<div class="half bg"></div>
	</section>

@stop