@extends('layouts.master')
@section('content')

<nav>
	<div class="nav_hp">
		<ul>
			<li id="home_hp" class="home"><a href="/">HOME</a></li>
			<li id="signup_hp" class="signup"><a href="{{action("Auth\AuthController@getRegister")}}">SIGN UP</a></li>
			<li id="signin_hp" class="signin"><a href="{{action("Auth\AuthController@getLogin")}}">SIGN IN</a></li>
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

<section class="hp_two">
	<div class="two">
		<div class="hp_two_text_box">
			<div class="hp_two_title">
				<h2 class="about_COTF">It's like calling a chef...</h2>
			</div>

			<div class="hp_two_text">
			<p><text class="important_text">Without having to make the call!</text> Just add your ingredients and Cooking on the Fly<br>
			will match you to recipes that you can make with ingredients you already have!<br></p>
			
			<p>To get started, sign in or sign up, and tell us what ingredients you have. Then, we'll<br>
			show you what you can make with what you have, what you can make if you borrow something<br>
			from a neighbor, and what you can make if you're willing to go to the store.<br></p>
			</div>
		</div>
	</div>
</section>

<section class="hp_three">
	<div class="three">
		<div class="hp_three_text_box">
			<div class="hp_three_title">
				<h2 class="get_started">get started!</h2>
			</div>
			<section class="section_buttons">
				<p class="buttons">
					<a class="sign_up_button" href="/signup/"><img height="230px" width="220px" float="left" src="/img/signup.png"></a>
					<a class="sign_in_button" href="/signin/"><img height="230px" width="220px" float="right" src="/img/signin.png"></a>
				</p>
			</section>
		</div>
	</div>
</section>

@stop