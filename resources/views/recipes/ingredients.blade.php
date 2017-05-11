@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')
<section class='text-center ingredients'>
	<h3> Choose Your Ingredients </h3>
<div class="veggie">
<img class='ingredient_head' src="/img/veghead.png">
<form action="">

</form>
</div>






<section class='text-center'>

<form name= 'sort' action="" class='text-left' method="GET">
	<div class="form-group sortform">
  		<label for="sel1">Sort By:</label>
  		<select name = 'sort' class="form-control" id="sel1">
			<option value= 'created_at'>Prep-time</option>
    		<option value= 'title'>Title</option>
 		</select><button type="submit" class="btn btn-primary">Sort</button>
	</div>
</form>
</section>




@stop