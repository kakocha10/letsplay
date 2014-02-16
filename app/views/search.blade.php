@extends("layout")
@section('header')
@overwrite
@section("content")

{{ Form::open(array('url' => 'submitSearch')) }}
<style>
  	body h1{
	  	font-family: "EnamelBrushRegular",Helvetica,sans-serif;
	    font-size: 140px;
	    font-weight: normal;
	    margin: 150px 50px 50px 40%;
	    width: 770px;
	}
	.sportInput {
		width: 100px;
	}
	.inputFields {
	 	margin: 0 auto 80px;
	    padding: 50px 0;
	    width: 800px;
	}
	.form-control {
	 	box-shadow: 0 0 10px #333333;
	    height: 37px;
	    line-height: 1.5em;
	    margin-bottom: 1em;
	    padding: 5px 10px 5px 3px;
	    width: 550px;

	}
	.sportSubmit{
		background: -moz-linear-gradient(center top , #70C128 0%, #5F8246 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
	    color: #2A3A1F;
	    display: inline-block;
	    font-weight: bold;
	    height: 41px;
	    padding: 0 20px;
	    text-shadow: 0 1px 0 #BEDCAA;
	}
</style>
<h1>Go</h1>
    <!-- username field -->
    <div class="inputFields">
    	<span class="sportInput">{{  Form::input('sport', 'sport', null, ['class' => 'form-control', 'placeholder' => 'sport e.g. squash, jogging']); }}</span>
    	<span class="locationInput">{{  Form::input('location', 'location', null, ['class' => 'form-control', 'placeholder' => 'location e.g. Castle Hill, NSW']); }}</span>
		</br>
		{{ Form::submit('Search',['class' => 'sportSubmit']) }}

	</div>
    <!-- submit button -->
    
{{ Form::close() }}