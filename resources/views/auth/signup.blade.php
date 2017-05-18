@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop

@section('custom_css')
	<link rel="stylesheet" href="/css/auth.css">
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
		<header>
			<h2 class="row sign_up_heading">SIGN UP</h2>
		</header>

		<div class="row sign_up">
			<div class="row sign_up_content">
				<form action="{{action('Auth\AuthController@postRegister')}}/" method="POST" enctype="multipart/form-data">
				{!! csrf_field() !!}

						{{-- <label for="name">Your name</label><br> --}}
					{{-- <input type="name" name="name" id="signup_name" class="inpt" required="required" placeholder="FULL NAME" value="{{ old('name') }}">

					<br><br> --}}
					<div>
						<label for="email" class="sr-only">Email</label>
						<input
							type="email"
							name="email"
							id="email"
							class="inpt"
							placeholder="EMAIL"
							value="{{old('email')}}"
							{{ $errors->has('email') ? 'aria-describedby="error-email"' : '' }}
							required>
						@if ($errors->has('email'))
							<span class="help-block" id="error-email">
								{{ $errors->first('email') }}
							</span>
						@endif
					</div>

					<br><br>
					
					<div>
						<label for="username" class="sr-only">Username</label>
						<input
							type="text"
							name="username"
							id="username"
							class="row inpt"
							placeholder="USERNAME"
							value="{{old('username')}}"
							{{ $errors->has('username') ? 'aria-describedby="error-username"' : '' }}
							required>
						@if ($errors->has('username'))
							<span class="help-block" id="error-username">
								{{ $errors->first('username') }}
							</span>
						@endif
					</div>

					<br><br>
					
					<div>
						<label for="password" class="sr-only">Password</label>
						<input
							type="password"
							name="password"
							id="password"
							class="inpt"
							placeholder="PASSWORD"
							{{ $errors->has('password') ? 'aria-describedby="error-password"' : '' }}
							required>
						@if ($errors->has('password'))
							<span class="help-block" id="error-password">
								{{ $errors->first('password') }}
							</span>
						@endif
					</div>

					<br><br>
					
					<div>
						<label for="password" class="sr-only">Password</label>
						<input
							type="password"
							name="password_confirmation"
							id="confirm_password"
							class="inpt"
							placeholder="CONFIRM PASSWORD"
							{{ $errors->has('password_confirmation') ? 'aria-describedby="error-password_confirmation"' : '' }}
							required>
						@if ($errors->has('password_confirmation'))
							<span class="help-block" id="error-password_confirmation">
								{{ $errors->first('password_confirmation') }}
							</span>
						@endif
					</div>

					<br><br>

					<div class="submit-area">
						<button type="submit" class="btn btn-default">Submit</button>
						<br>
						<a class="or_sign_in" href="/signin/">(OR SIGN IN)</a>
						<br><br>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section class="row sign_up_bottom">
	</section>
@stop