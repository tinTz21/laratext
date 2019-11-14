@extends('layouts.master')


@section('contents')
<div class="container">
	<nav class="col-md">
		@foreach ($projects as $projects)
 	<h3>{{ $projects->title }}</h3>
 	<p>{{ $projects->description }}</p>
 	<p>post created at {{ $projects->created_at }}</p>
 	<p>id number {{ $projects->id }}</p>
 @endforeach
	</nav>
</div>
@endsection