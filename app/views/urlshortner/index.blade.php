@extends('layouts.urlshortner')

@section('content')
	<h1>My URL Shortner</h1>
	{{ Form::open(array('url' => '/url-shortner')) }}
		{{ Form::text('url') }}
	{{ Form::close() }}

	{{ $errors->first('url', '<p class="error">:message</p>') }}

@stop