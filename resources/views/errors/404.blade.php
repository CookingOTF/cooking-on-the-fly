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
			background-image: url('/img/404oops.jpeg') !important;
			background-size: cover;
			width: 100%;
    		height: 100%;
			opacity: 0.4;
			z-index: -1;
		}
	</style>
@stop


@section('content')

<section class="row 404_error"></section>

@stop
