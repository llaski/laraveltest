@extends('layouts.urlshortner')

@section('content')
	<h1>My URL Shortner</h1>
	{{ Form::open(array('url' => '/url-shortner')) }}
		{{ Form::label('url', 'Your Long URL') }}
		{{ Form::text('url') }}
		{{ Form::submit('Shortner') }}
	{{ Form::close() }}
@stop