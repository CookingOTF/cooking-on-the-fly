@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')

<section class="hp_one">
	<div class="one" id="logo_hp"><br>
		<img src="/img/logo1.png" class="col-xs-5 id="hp_logo">
	</div>
</section>

<section id="hp_two">
	<div class="col-xs-12" class="two">
		<div class="hp_two_text_box">
			<div class="hp_two_title">
				<h2 class="about_COTF">It's like calling a chef...</h2>
			</div>

			<div id="hp_two_text">
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
{{-- 			<div class="hp_three_title">
				<h2 class="get_started">get started!</h2>
			</div> --}}
			<section class="section_buttons">
				<p class="buttons">
					<a class="col-xs-7 col-xs-offset-1" id="sign_up_button" href="/signup/"><img height="300px" width="290px" float="left" src="/img/signup.png"></a>
					<a class="col-xs-4" id="sign_in_button" href="/signin/"><img height="300px" width="290px" float="right" src="/img/signin.png"></a>
				</p>
			</section>
		</div>
	</div>
</section>

@stop