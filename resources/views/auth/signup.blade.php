@extends('layouts.master')
<<<<<<< HEAD
@section('content')

	<section class="container">
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
		<div class="half bg"></div>
=======
@section('navbar')
@include('partials.nav')
@stop
@section('content')

	<section class="sign_up_container">

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

				<br><br>
					</div>
				</form>
			</div>
		</div>
>>>>>>> 9ae5392c875338e46931c7f04ddf64fd830b6202
	</section>
@stop