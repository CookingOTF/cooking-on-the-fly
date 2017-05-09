@extends('layouts.master')
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
	</section>
@stop