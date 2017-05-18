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
			<div class="col-xs-5"><img class="single_recipe_photo" src="/img/{{$recipe->image}}">
			</div>

			<div class="single_recipe_information col-xs-6">
			<p class="single_recipe_title">{{$recipe->name}}</p>

			@if($recipe->prep_time)
				<p class="single_recipe_prep_time">Prep Time: {{$recipe->prep_time}}</p>
			@endif

			@if($recipe->cook_time)
				<p class="single_recipe_cook_time">Cook Time: {{$recipe->cook_time}}</p>
			@endif

			@if($recipe->total_time)
				<p class="single_recipe_total_time">Total Time: {{$recipe->total_time}}</p>
			@endif
			
			</div>
		</div>

		<div class="row">
		<div class="recipe_ingredients col-xs-5 col-xs-offset-1">
			<div class="ingredients_title">Ingredients:</div>
			<div class="ingredients_list">
			1. Chicken<br>
			2. Lemon<br>
			3. Garlic<br>
			4. Oil
			</div>
		</div>

		<div class="recipe_directions col-xs-5 col-xs-offset-1">
			<div class="directions_title">Directions:</div>
			<div class="single_recipe_directions">
			1.HERE<br>
			2.ARE<br>
			3.THE<br>
			4.DIRECTIONS!<br>
			</div>
		</div>
</section>

			<br><br>
	

@stop