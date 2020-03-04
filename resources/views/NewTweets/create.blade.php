@extends('layouts.app')
{{--the title will be unique for each section--}}
@section('title')
@endsection
{{--the content will be unique for each section--}}
@section('content')
@auth
<p>Fill out this form to create a Tweet!</p>
<form method="post" action="{{ route('newtweets.store') }}">
	@csrf
	{{--Cross-site request forgery protection--}}
	<label for="message">
		<strong>Input a Message:</strong>
		<textarea name="message" id="message" cols="30" rows="10"></textarea>
	</label>
	<label for="author">
		<strong>Author name:</strong>
		<input type="text" name="author" id="author">
	</label>
	<input type="submit" Value="Publish Tweet">
</form>
@endauth
@endsection