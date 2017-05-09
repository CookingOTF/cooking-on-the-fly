@extends('layouts.master')
@section('content')

<nav>
	<div class="nav_hp">
		<ul>
			<li id="home_hp" class="home"><a href="/">HOME</a></li>
			<li id="signin_hp" class="signin"><a href="{{action("Auth\AuthController@getLogin")}}">SIGN IN</a></li>
			<li id="signup_hp" class="signup"><a href="{{action("Auth\AuthController@getRegister")}}">SIGN UP</a></li>
			<li id="browse_hp" class="browse"><a href="/recipes/browse/">BROWSE</a></li>
		</ul>
	</div>
</nav>


<div class="content" id="logo_hp">
	<a class="hp_signin" href="/signin/"><img src="/img/signin.png" class="hp_signin"></a>
	<img src="/img/logo1.png" class="hp_logo">
	<a class="hp_singup" href="/signup/"><img src="/img/signup.png" class="hp_signup"></a>
	<br><br><br><br><br>
	<h2 class="motto">Your ingredient based recipe finder</h2><br><br><br>
</div>
@stop