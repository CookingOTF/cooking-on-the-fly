@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')
@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')
<section class='text-center ingredients'>
	<h3 class='ingredient_title'> SELECT YOUR INGREDIENTS </h3>

<img class='ingredient_head' src="/img/veghead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 @foreach ($ingredients_by_category as $category => $ingredients)
	<fieldset>
		<legend>{{ $category }}</legend>
		@foreach ($ingredients as $ingredient)
			<label>
				<input type="checkbox" name="i[]" value="{{ $ingredient->name }}">
				{{ $ingredient->display_name }}
			</label>
		@endforeach
	</fieldset>
@endforeach
</form>
</div>

<img class='ingredient_head' src="/img/fruithead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>
<img class='ingredient_head' src="/img/dairyhead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>
<img class='ingredient_head' src="/img/meathead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>
<img class='ingredient_head' src="/img/breadhead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>


<img class='ingredient_head' src="/img/oilhead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>


<img class='ingredient_head' src="/img/seasoninghead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>

<img class='ingredient_head' src="/img/snackhead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>

<img class='ingredient_head' src="/img/beverageshead.png">	
<div class="indredient_box col-xs-8 col-xs-offset-2">
<form action="">

 PUT FOR EACH HERE
</form>
</div>





<!-- <section class='text-center'>

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

 -->


@stop
@stop