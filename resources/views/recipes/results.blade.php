@extends('layouts.master')

@section('navbar')
	@include('partials.nav')
@stop

@section('custom_css')
	<style>
		h3, h4 {
			color: #F3F3F3	;
			text-align: initial;
			font-size: 3rem;
		}
		ul {
			list-style: none;
		}
	</style>
@stop

@section('content')
	<header>
		<h1 class="all_recipes">HERE'S WHAT YOU CAN MAKE...</h1>
	</header>

	@if($onhand)
		<section class="container">
			<header class="row">
				<h3>WITH WHAT YOU ALREADY HAVE...</h3>
			</header>
			<ul class="row">
				@foreach($onhand as $recipe)
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
	@endif
	<hr>	
	@if($borrow)
		<section class="container">
			<header class="row">
				<h3>IF YOU ASK A NEIGHBOR FOR...</h3>		
			</header>
			@foreach ($borrow as $lacking => $recipes)
				<section class="row container">
					<header class="row">
						<h4>{{ $lacking }}:</h4>
					</header>
					<ul class="row">
						@foreach($recipes as $recipe)
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
								<a class="thumbnail" href="{{ action('RecipesController@show', $recipe->id) }}/">
									<p>
										<img class="browse_image" src="/img/{{ $recipe->image }}">
									</p>
									<p class="browse_name">{{ $recipe->name }}</p>
									<p class="browse_cook_time">total cook time: {{$recipe->cook_time}}</p>
								</a>
							</li>
						@endforeach
					</ul>
				</section>
			@endforeach
		</section>
	@endif
	<hr>
	@if($goShopping)
		<section class="container">
			<header class="row">
				<h3>IF YOU GO TO THE STORE...</h3>
			</header>
			<ul class="row">
				@foreach($goShopping as $recipe)
					<li class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<a class="thumbnail" href="{{ action('RecipesController@show', $recipe->id) }}/">
							<p>
								<img class="browse_image" src="/img/{{ $recipe->image }}">
							</p>
							<p class="browse_name">{{ $recipe->name }}</p>
							<p class="browse_cook_time">total cook time: {{$recipe->cook_time}}</p>
						</a>
					</li>
				@endforeach
			</ul>
		</section>
	@endif
@stop