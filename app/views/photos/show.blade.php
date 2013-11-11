@section('container')
	<h1>{{ $photo->caption }}</h1>
	<img src="/{{ $photo->path }}" alt="{{ $photo->caption }}" />
@stop