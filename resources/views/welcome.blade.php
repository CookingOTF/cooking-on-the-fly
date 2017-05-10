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

<section>
	<div class="hp_two">
		<div class="hp_two_text_box">
			<div class="hp_two_title">
				<h2 class="about_COTF"><br>It's like calling your mom...</h2>
			</div>

			<div class="hp_two_text">Without having to make the call! Just add your ingredients and Cooking on the Fly will match you to recipes that you can make with ingredients you already have! 

			To get started, sign in or sign up, and tell us what ingredients you have. Then, we'll show you what you can make with what you have, what you can make if you borrow something from a neighbor, and what you can make if you're willing to go to the store.
			</div>
		</div>
	</div>
</section>
@stop