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
<div class="ingredient_box col-xs-8 col-xs-offset-2">
<form action="">



</div>

<img class='ingredient_head' src="/img/fruithead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 PUT FOR EACH HERE

</div>
<img class='ingredient_head' src="/img/dairyhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 PUT FOR EACH HERE

</div>
<img class='ingredient_head' src="/img/meathead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 PUT FOR EACH HERE

</div>
<img class='ingredient_head' src="/img/breadhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 PUT FOR EACH HERE

</div>


<img class='ingredient_head' src="/img/oilhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">

 PUT FOR EACH HERE

</div>


<img class='ingredient_head' src="/img/seasoninghead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 PUT FOR EACH HERE

</div>

<img class='ingredient_head' src="/img/snackhead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 PUT FOR EACH HERE

</div>

<img class='ingredient_head' src="/img/beverageshead.png">	
<div class="ingredient_box col-xs-8 col-xs-offset-2">


 PUT FOR EACH HERE
   <input type="submit" value="Submit">
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