@extends('layouts.master')
@section('navbar')
@include('partials.nav')
@stop
@section('content')
<section>
	<h3> All Recipes </h3>
</section>
<table>
 
 @foreach($recipes as $index=>$recipe)
 	@if ($index % 4 == 0)
 		<tr>
 	@endif
		<td class='browse_table'>
			<p><img class="browse_image" src="/img/{{$recipe->image}}"></p>
			<p class="browse_name"> {{$recipe->name}}</p>
			{{-- <p class="browse_description">{{$recipe->description}}</p> --}}
			{{-- <p class="browse_prep_time">{{$recipe->prep_time}}</p> --}}
		</td>
	@if ($index % 4 == 3)
		</tr>
	@endif
@endforeach

</table>

{{-- <section class='text-center'>
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
 --}}




@stop