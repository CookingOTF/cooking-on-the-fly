@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')


<section class="dashboard">
	<div class="user_dashboard">
		<h1 class="my_account">Welcome, $user!</h1>

		<section class="user_info">
			<h3 class="my_account_info">User Account</h3>
		</section><br><br>


		<section class="favorites">
			<h3 class="favorite_recipes">Favorite Recipes</h3>
		</section><br><br>


		<section class="fridge">
			<h3 class="my_fridge">User Fridge</h3>
		</section>


	</div>





</section>








@stop