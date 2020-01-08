@extends('layouts.master')


@section('contents')
<div class="container">
	<nav class="col-md">
		@foreach ($projects as $projects)
 	<h4><a href="/projects/{{ $projects->id }}">{{ $projects->title }}</a></h4>
 @endforeach
	</nav>
 <a href="/projects/create">create</a>
</div>
@endsection

