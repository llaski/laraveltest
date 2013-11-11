@section('container')
	<ul class="photos">
		@foreach ($photos as $photo)
			<li>
			<figure>
				<img src="/{{ $photo->path }}" alt="{{ $photo->caption }}" />
				<figcaption>
					{{ link_to_route('photos.show', $photo->caption, $photo->id) }}
				</figcaption>
			</figure>
			</li>
		@endforeach
	</ul>
@stop