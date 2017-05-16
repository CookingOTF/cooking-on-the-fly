@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')

	<h3 class='title'> BY TIER </h3>

<section class="recipes_by_tier">

	<div class="recipes_results"> Recipe Results:
	</div>

	<div class="tier_one">
		<div> What you can make with what you have!
		</div>
	</div>

	<div class="tier_two">
		<div> What you can make if you borrow from a neighbor!
		</div>
	</div>

	<div class="tier_three">
		<div> What you can make if you go to the store! (ALL RECIPES)
		</div>
	</div>
	
</section>



@stop