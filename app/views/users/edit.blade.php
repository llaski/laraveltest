@extends('layouts.default')


@section('content')
	<p>Edit User</p>
	{{ Form::open(array('url' => '/users/'.$username, 'method' => 'PUT')) }}
		{{ Form::label('username', 'Username: ') }}
		{{ Form::text('username', $username) }}
		<div>{{ Form::submit('Submit') }}</div>
	{{ Form::close() }}

	{{ Form::open(array('url' => '/users/'.$username, 'method' => 'DELETE')) }}
		<div>{{ Form::submit('Delete user') }}</div>
	{{ Form::close() }}

	{{ link_to('/users/', 'Back to Users') }}
@stop