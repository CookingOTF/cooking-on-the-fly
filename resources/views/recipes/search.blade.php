@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')

<form action="">

<section class='text-center ingredients'>
	<h3 class='ingredient_title'> SELECT YOUR INGREDIENTS </h3>

<img class='ingredient_head' src="/img/veghead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


<fieldset>

	@foreach ($ingredients['vegetable'] as $ingredient)

		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>
</div>


<img class='ingredient_head' src="/img/fruithead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">

<fieldset>
	@foreach ($ingredients['fruit'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>

</div>
<img class='ingredient_head' src="/img/dairyhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


<fieldset>
	@foreach ($ingredients['dairy'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>


</div>
<img class='ingredient_head' src="/img/meathead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">
<fieldset>
	@foreach ($ingredients['meats'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>

</div>


<img class='ingredient_head' src="/img/breadhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 <fieldset>
	@foreach ($ingredients['grains'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>

</div>


<img class='ingredient_head' src="/img/oilhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">

 <fieldset>
	@foreach ($ingredients['oils'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>

</div>


<img class='ingredient_head' src="/img/seasoninghead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">

 
 <fieldset>
	@foreach ($ingredients['seasonings'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>
	@foreach ($ingredients['condiments'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</div>

<img class='ingredient_head' src="/img/snackhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">

<fieldset>
	@foreach ($ingredients['snacks'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>

<fieldset>
	@foreach ($ingredients['nuts'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>
</div>

<img class='ingredient_head' src="/img/beverageshead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">

<fieldset>
	@foreach ($ingredients['beverages'] as $ingredient)
		<label>
			<input
				type="checkbox"
				name="q[]"
				value="{{ $ingredient->name }}">
			{{ $ingredient->display_name }}
		</label>
	@endforeach
</fieldset>


</div>

   <input type="submit" value="Submit">
</form>   





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