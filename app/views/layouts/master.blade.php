<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Laravel PHP Framework</title>
   	<meta name="viewport" content="widget=device-width">
</head>
<body>

	<nav>
		<ul>
			@section('nav')
				<li>Home</li>
				<li>About</li>
			@show
		</ul>
	</nav>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>
