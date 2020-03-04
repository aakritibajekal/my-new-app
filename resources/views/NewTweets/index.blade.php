@extends('layouts.app')

@section('title')
New Tweets Index
@endsection

@section('content')
<h1>@section('title')
@endsection
</h1>
@if ( session()->get('success') )
<div role="alert">
	{{ session()->get('success') }}
</ul>
</div>
@endif
<p>
	List of Tweets:
</p>
<ul>
	@foreach($tweets as $tweet)
	<li>
		<h2>{{$tweet->author}}</h2>
		<p>{{$tweet->message}}</p>
	</li>
		@endforeach
</ul>
@endsection