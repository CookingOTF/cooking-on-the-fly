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
	<header>
		<h1 class="all_recipes">You currently can make...</h1>
	</header>

	@if($onhand)
		<section class="container">
			<header class="row">
				<h3>With what you have onhand...</h3>
			</header>
			<ul class="row">
				@foreach($onhand as $index => $recipe)
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
		
	@if($borrow)
		<section class="container">
			<header class="row">
				<h3>If you ask a neighbor for...</h3>		
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
		
	@if($goShopping)
		<section class="container">
			<header class="row">
				<h3>If you go to the store...</h3>
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