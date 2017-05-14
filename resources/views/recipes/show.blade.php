@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')

<section>
	<h1 class="recipe_name">Recipe</h1>
</section>

<div class="single_recipe_box_tab"></div>
<section class="single_recipe_box col-xs-11 col-xs-offset-1">
		<div>
			<br><br>
			<div class="single_recipe_photo col-xs-4">Photo:
			</div>

			<div class="single_recipe_information col-xs-8">
			<p class="single_recipe_title">Chicken Bake</p>
			<p class="single_recipe_prep_time">Prep Time: 5 mins</p>
			<p class="single_recipe_cook_time">Cook Time: 1 hour</p>
			</div>
		</div>

			<div class="single_recipe_directions">Directions:
			1. Bake<br>
			2. The<br>
			3. Chicken<br>
			4. !!!!!
			</div>

			<br><br>
	
</section>

@stop