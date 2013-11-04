<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@foreach($posts as $post)
		<h2>This Title is {{ $post->title }}</h2>
		<p>This Author is {{ $post->author->name }}</p>
	@endforeach

</body>
</html>