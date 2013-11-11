<? /*{{ Form::open(['method' => 'PUT', 'route' => ['tasks.update', $task->id]]) }} */ ?>
{{ Form::model($task, ['method' => 'PUT', 'route' => ['tasks.update', $task->id]]) }}

	<? /* {{ Form::text('title', $task->name) }} */ ?>
	<fieldset>
		{{ Form::label('title', 'Title: ') }}
		{{ Form::text('title') }}
		<hr />
		{{ Form::label('completed', 'Completed: ') }}
		{{ Form::checkbox('completed') }}
	</fieldset>
	<fieldset>
		{{ Form::submit('Submit') }}
	</fieldset>

	<? /* {{ Form::selectYear('year', '2000', '2010', '2005', ['class' => 'year-dropdown']) }} */ ?>
{{ Form::close() }}