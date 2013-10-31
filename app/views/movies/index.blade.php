<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	{{ link_to_route('new_movie', 'Create a New Movie') }}

	{{ link_to_route('movie', 'Show a Movie', array('name' => 'Rocky')) }}
</body>
</html>