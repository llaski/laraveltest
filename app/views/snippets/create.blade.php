@extends('layouts.default')

@section('content')
	{{ Form::open(array('url' => '/snippets/store')) }}
		{{ Form::textarea('snippet') }}
		{{ link_to_route('new_snippet', 'Start Over') }}
		{{ Form::submit('Save') }}
	{{ Form::close() }}
@stop