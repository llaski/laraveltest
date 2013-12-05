<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Create a new post</h1>

	{{ Form::open(['route' => 'posts.store']) }}
		<p>{{ Form::text('title') }}</p>
		<p>{{ Form::textarea('body') }}</p>
		<p>{{ Form::submit('Submit') }}</p>
	{{ Form::close() }}

	@include('_partials.errors')
</body>
</html>