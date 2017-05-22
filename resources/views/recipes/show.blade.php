@extends('layouts.master')

@section('navbar')
	@include('partials.nav')
@stop

@section('custom_css')
	<style>

	.directions {
		list-style: none; /* Removes default numbering */
		counter-reset: step; /* Creates counter */
		padding-left: 24px; /* You can (and probably sould) play with this, especially if you change the font size/weight/etc */
	}

	.directions>li::before {
		counter-increment: step; /* Tells our counter how to work */
		content: "Step" counter(step) ":"; /* I'll explain how this works. */
		user-select: none; /* Not necessary; makes the "Step {x}:" text more like the default numbering by disallowing the user to select it with their cursor */
		padding-right: 4px; /* Again, you probably SHOULD mess around with this */
	}

	.ingredients_list {
		list-style: none;
		padding: 0;
	}
	</style>
@stop

@section('content')

<div class="recipe_name"></div>

<div class="single_recipe_box_tab"></div>

<div class="row">
	<section class="single_recipe_box col-xs-10 col-xs-offset-2">
		<div class="recipe_info">
			<br><br>

			<div class="row">
				<div class="col-xs-5">
					<img class="single_recipe_photo" src="/img/{{$recipe->image}}">
				</div>

				<div class="single_recipe_information col-xs-5 col-xs-offset-1">
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
		</div>

		<div class="row">
			<div class="recipe_ingredients col-xs-3 col-xs-offset-1">
				<h2 class="ingredients_title">Ingredients</h2>
				<ul class="ingredients_list">
					@foreach ($recipe->ingredients as $ingredient)
						<li>{{ $ingredient }}</li>
					@endforeach
				</ul>
			</div>

			<div class="row recipe_directions col-xs-7 col-xs-offset-1">
				<h2 class="directions_title">Directions</h2>
				<div class="single_recipe_directions">
					@if(sizeof($recipe->directions) === 1)
						<p>
							{{ $recipe->directions[0] }}
						</p>
					@else
						<ol class="directions">
							@foreach ($recipe->directions as $step)
								<li> &nbsp;{{ $step }}</li>
							@endforeach
						</ol>
					@endif
				</div>
			</div>
		</div>
	</section>
</div>

<br><br>
	

@stop