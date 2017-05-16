@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')


<section class="dashboard">
	<div class="user_dashboard">
		<h1 class="my_account">Welcome, {{Auth::user()->username}}!</h1>

		<section id="user_info" class="col-xs-11 col-xs-offset-1">
			<h3 class="my_account_info">User Account</h3>
				<div class="user_account_info">
					<p>Name:</p>
					<p>DOB:</p>
					<p>E-mail:</p>
					<p></p>
				</div>
		</section>


		<section id="favorites" class="col-xs-11 col-xs-offset-1">
			<h3 class="favorite_recipes">Favorite Recipes/Your Top Recipes</h3>
		</section><br><br>


		<section id="fridge" class="col-xs-11 col-xs-offset-1">
			<h3 class="my_fridge">User Fridge</h3>
		</section>


	</div>





</section>








@stop