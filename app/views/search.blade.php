@extends("layout.layout")
@section("content")

{{ Form::open(array('url' => 'submitSearch')) }}
<h1>Go</h1>
    <!-- username field -->
    <div class="inputFields">
    	<span class="sportInput">{{  Form::input('text', 'sport', null, ['class' => 'form-control', 'placeholder' => 'sport e.g. squash, jogging']); }}</span>
    	<span class="locationInput">{{  Form::input('text', 'location', null, ['class' => 'form-control', 'placeholder' => 'location e.g. Castle Hill, NSW']); }}</span>
		</br>
		{{ Form::submit('Search',['class' => 'sportSubmit']) }}

	</div>
    <!-- submit button -->
    
{{ Form::close() }}
@stop