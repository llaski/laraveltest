@extends('layouts.default')

@section('stylesheets')
	{{ HTML::style('google-code-prettify/src/prettify.css') }} 
@stop

@section('content')
	<pre class="prettyprint linenums">{{ htmlentities($snippet) }}</pre>
	<div class="btn-group nav">
		{{ link_to_route('fork_snippet', 'Fork', $id, array('class' => 'btn btn-warning')) }}
		{{ link_to_route('new_snippet', 'New', '', array('class' => 'btn btn-success')) }}
	</div>
@stop

@section('scripts')
	{{ HTML::script('google-code-prettify/src/prettify.js') }} 
	<script type="text/javascript">
		prettyPrint();
	</script>
@stop