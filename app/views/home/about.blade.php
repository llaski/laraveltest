@extends('layouts.master')

@section('nav')
	<li>Within the About Page</li>
	@parent
@stop

@section('content')
	<p>About Me</p>
	<br />
	{{ $greeting .' ' . $thing  }}
	<br />

	@if (count($items) > 0)
		@foreach($items as $item)
			<p>This Item is {{ $item }}</p>
		@endforeach
	@else
		<p>No Items</p>
	@endif

	@unless (count($items) == 0)
		<p>Boo Ya for Items</p>
	@endunless
@stop