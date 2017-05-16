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

	<section class="row sign_up_top">
	</section>
		<section id="sign_up_container" class="row col-xs-4 col-xs-offset-1">

			<h2 class="row sign_up_heading">SIGN UP</h2>
			<div class="row sign_up">

				<div class="row sign_up_content">
					<form action="{{action('Auth\AuthController@postRegister')}}/" method="POST" enctype="multipart/form-data">
					{!! csrf_field() !!}

					@if ($errors->has('name'))
					    {{ $errors->first('name') }}
					@endif
					@if ($errors->has('email'))
					    {{ $errors->first('email') }}
					@endif
					@if ($errors->has('username'))
					    {{ $errors->first('username') }}
					@endif
					@if ($errors->has('password'))
					    {{ $errors->first('password') }}
					@endif
					@if ($errors->has('password_confirmation'))
					    {{ $errors->first('password_confirmation') }}
					@endif

							{{-- <label for="name">Your name</label><br> --}}
						{{-- <input type="name" name="name" id="signup_name" class="inpt" required="required" placeholder="FULL NAME" value="{{ old('name') }}">

						<br><br> --}}

							{{-- <label for="email">Your email</label><br> --}}
						<input type="email" name="email" id="signup_email" class="inpt" required="required" placeholder="EMAIL" value="{{old('email')}}">

						<br><br>

						<input type="username" name="username" id="signup_username" class="row input" required="required" placeholder="USERNAME" value="{{old('username')}}">

						<br><br>

							{{-- <label for="password">Your password</label><br> --}}
						<input type="password" name="password" id="signup_password" class="inpt" required="required" placeholder="PASSWORD">

						<br><br>

							{{-- <label for="password">Your password</label><br> --}}
						<input type="password" name="password_confirmation" id="signup_confirm_password" class="inpt" required="required" placeholder="CONFIRM PASSWORD">

						<br><br>

						<div class="submit-area">
						<button type="submit" class="btn btn-default">Submit</button>
						<br>
						<a class="or_sign_in" href="/signin/">(OR SIGN IN)</a>

						</div>
					</form>
				</div>
			</div>
		</section>
	<section class="row sign_up_bottom">
	</section>
	<br>
@stop