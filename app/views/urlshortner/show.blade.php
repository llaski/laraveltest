@extends('layouts.urlshortner')

@section('content')
	<h1>Shortened URL</h1>
	{{ HTML::link($shortened, 'local.laraveltest.com:8888/'.$shortened) }}
@stop