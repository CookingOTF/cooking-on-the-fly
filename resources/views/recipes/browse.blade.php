@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')
<section class='text-center'>
	<h3> All Recipes </h3>
</section>
 the at sign and for each here!! foreach($recipes as $recipe)


 		<div class='text'></a>
 			<p> Image Displayed here!</p>
			<p> Recipe Name</p>
			<p>Instructions</p>
			<p> cook time!</p>

		</div>
	</div>
at sign and end foreach here
<section class='text-center'>
</section>
<form name= 'sort' action="" class='text-left' method="GET">
	<div class="form-group sortform">
  		<label for="sel1">Sort By:</label>
  		<select name = 'sort' class="form-control" id="sel1">
			<option value= 'created_at'>Prep-time</option>
    		<option value= 'title'>Title</option>
 		</select><button type="submit" class="btn btn-primary">Sort</button>
	</div>
</form>





@stop