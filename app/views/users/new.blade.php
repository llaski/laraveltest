@extends('layouts.default')


@section('content')
	<p>New User</p>
	{{ Form::open(array('url' => '/users')) }}
		{{ Form::label('username', 'Username: ') }}
		{{ Form::text('username') }}
		<div>{{ Form::submit('Submit') }}</div>
	{{ Form::close() }}
@stop