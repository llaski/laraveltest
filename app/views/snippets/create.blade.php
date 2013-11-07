@extends('layouts.default')

@section('content')
	{{ Form::open(array('url' => '/snippets/store')) }}
		{{ Form::textarea('snippet', $snippet) }}
		<div class="btn-group nav">
			{{ link_to_route('new_snippet', 'Start Over', array(), array('class' => 'btn btn-danger')) }}
			{{ Form::submit('Save', array('class' => 'btn btn-success')) }}
		</div>
	{{ Form::close() }}
@stop

@section('scripts')
	<script type="text/javascript">
		$('textarea').height($(window).height() - 50);
	</script>
@stop