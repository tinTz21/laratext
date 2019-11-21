@extends('layouts.master')


@section('contents')
<div class="container-fluid">
	<nav class="col-md">
 	<h3>{{ $project->title }}</h3>
 	<p>{{ $project->description }}</p>
 	<p>post created at {{ $project->created_at }}</p>
	</nav>
</div>
@endsection