@extends('layouts.master')

@section('navbar')
	@include('partials.nav')
@stop

@section('custom_css')
	<style>
		h3, h4 {
			color: white;
			text-align: initial;
		}

		ul {
			list-style: none;
		}
	</style>
@stop

@section('content')
	<section>
		<header>
			<h3 class="all_recipes">Browse All Recipes</h3>
		</header>
		<ul class="row">
			@foreach($recipes as $recipe)
				<li class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<a class="thumbnail" href="{{ action("RecipesController@show", $recipe->id) }}/">
						<p>
							<img class="browse_image" src="/img/{{ $recipe->image }}">
						</p>
						<p class="browse_name">{{ $recipe->name }}</p>
						<p class="browse_cook_time">total cook time: {{$recipe->total_time}}</p>
					</a>
				</li>
			@endforeach
		</ul>
	</section>

	{!! $recipes->render() !!}
@stop