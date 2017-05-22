@extends('layouts.master')

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
			background-size: contain;
			background-repeat: no-repeat;
			margin-top: -150px;
			margin-left: .6%;
			width: 100%;
    		height: 800px;
			opacity: 0.4;
			z-index: -1;
		}

		#error_msg {
			color: #F3F3F3;
			font-size: 7rem;
			padding-top: 10%;
			margin-left: -65%;
			text-align: center;
		}
	</style>
@stop


@section('content')

<section class="row 404_error" id="error_msg"> Whoops, this<br>is embarrassing! </section>

@stop
