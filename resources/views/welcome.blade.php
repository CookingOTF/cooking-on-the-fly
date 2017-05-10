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

<section class="hp_one">
	<div class="one" id="logo_hp">
		<img src="/img/logo1.png" class="hp_logo">
		<br><br><br><br><br>
		<h2 class="motto">your ingredient based recipe finder...</h2><br><br><br>
	</div>
</section>
@stop