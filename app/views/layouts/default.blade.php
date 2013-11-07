<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <style type="text/css">
    * {
    	margin: 0;
    	padding: 0;
    }
    </style>

    @yield('stylesheets')
    {{ HTML::style('css/vendors/bootstrap.css')}}
    {{ HTML::style('css/main.css')}}
</head>
<body>
	<div class="container">
		@yield('content')
	</div>

	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js') }} 
    {{ HTML::script('js/vendors/tabby.js') }} 
    @yield('scripts')

	<script type="text/javascript">
		$('textarea').tabby();
	</script>
</body>
</html>
