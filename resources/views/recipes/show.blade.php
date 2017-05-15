@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')

<section>
	<h1 class="recipe_name"></h1>
</section>

<div class="single_recipe_box_tab"></div>

<div class="row">
<section class="single_recipe_box col-xs-10 col-xs-offset-2">
		<div class="recipe_info">
			<br><br>

			<div class="row">
			<div class="single_recipe_photo col-xs-4">Photo:
			</div>

			<div class="single_recipe_information col-xs-7">
			<p class="single_recipe_title">Chicken Bake</p>
			<p class="single_recipe_prep_time">Prep Time: 5 mins</p>
			<p class="single_recipe_cook_time">Cook Time: 1 hour</p>
			<p class="single_recipe_total_time">Total Time: 5 mins</p>
			</div>
		</div>

		<div class="row">
		<div class="recipe_ingredients col-xs-5">
			<div class="ingredients_title">Ingredients:</div>
			<div class="ingredients_list">
			1. Chicken<br>
			2. Lemon<br>
			3. Garlic<br>
			4. Oil
			</div>
		</div>

		<div class="recipe_directions col-xs-7">
			<div class="directions_title">Directions:</div>
			<div class="single_recipe_directions">
			1. Bake<br>
			2. The<br>
			3. Chicken<br>
			4. !!!!!
			</div>
		</div>
</section>

			<br><br>
	

@stop