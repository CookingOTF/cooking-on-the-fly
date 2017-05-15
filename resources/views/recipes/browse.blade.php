@extends('layouts.master')
@section('navbar')
@include('partials.nav')
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