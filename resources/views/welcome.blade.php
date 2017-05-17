@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')

<section class="row hp_one">
	<div class="one" id="logo_hp"><br>
		<img src="/img/logo1.png" class="col-xs-5" id="hp_logo">
	</div>
</section>

<section class="row" id="hp_two">
	<div class="col-xs-12" class="two">
		<div class="hp_two_text_box">
			<div class="hp_two_title">
				<h2 class="about_COTF">It's like calling a chef...</h2>
			</div>

			<div id="hp_two_text">
				<p class="col-lg-6 col-lg-offset-3 hp_two_paragraph"><text class="important_text">Without having to make the call!</text> &nbsp; Just tell us what you have on hand, and Cooking on the Fly will do the work for you! We'll match you to recipes that you can make with ingredients you already have, so you don't have to worry or stress over dinner!</p>
					
				<p class="col-lg-6 col-lg-offset-3 hp_two_paragraph">To get started, sign in or sign up, and tell us what ingredients you have. Then, we'll show you what you can make with what you have, what you can make if you borrow something from a neighbor, and what you can make if you're willing to go to the store. And don't forget to save your recipes on your User Dashboard so you can access them later!</p>
					</div>
				</div>
			</div>
		</section>

		<section class="row hp_three">
			<div class="three">
				<section class="text-center section_buttons">
					<div class="col-sm-6 buttons">
						<a id="sign_up_button" href="/signup/">
							<img height="300px" width="290px" src="/img/signup.png">
						</a>
					</div>
					<div class="col-sm-6">
						<a id="sign_in_button" href="/signin/">
							<img height="300px" width="290px" src="/img/signin.png">
						</a>
					</div>
				</section>
			</div>
		</section>

		@stop