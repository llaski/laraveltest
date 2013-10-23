@extends('layouts.master')

@section('nav')
	<li>Within the ORM Page</li>
	@parent
@stop

@section('content')
	<p>ORM</p>

	@if (count($users) > 0)
		<ul>
		@foreach($users as $user)
			<li>{{ $user->email }}</li>
		@endforeach
		</ul>
	@else
		<p>No Users</p>
	@endif
@stop