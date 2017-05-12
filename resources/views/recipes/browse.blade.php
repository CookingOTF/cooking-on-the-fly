@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop

@section('custom_css')
	<style type="text/css">
		body {
			position: relative;
		}

		body:after{
			content : "";
		    display: block;
		    position: absolute;
		    top: 0;
		    left: 0;
			background-image: url('/img/food_bg2.png');
			background-size: cover;
			width: 100%;
    		height: 100%;
			opacity: 0.4;
			z-index: -1;
		}
	</style>
@stop

@section('content')

<section>
	<h3 class="all_recipes"> Browse All Recipes </h3>
</section>

<div class="row">
	@foreach($recipes as $index=>$recipe)
		<div class="col-md-3 col-sm-4">
			<div class="thumbnail">
				<a href="{{action("RecipesController@show", ['id' => $recipe->id])}}/">
					<p>
						<img class="browse_image" src="/img/{{$recipe->image}}"></p>
					<p class="browse_name"> {{$recipe->name}}</p>
					{{-- <p class="browse_description">{{$recipe->description}}</p> --}}
					{{-- <p class="browse_prep_time">{{$recipe->prep_time}}</p> --}}
				</a>
			</div>
		</div>
	@endforeach
</div>



@stop