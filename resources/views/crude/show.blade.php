@extends('layouts.master')

@section('contents')

<ul>
	<h4 class="title">{{ $crude->title }}</h1>
		<p>-- {{ $crude->project }}</p>
</ul>
<p> <a href="/crude/{{ $crude->id }}/edit">Edit</a></p>
@if($crude->tasks->count())
<div class="card">
	<h4>--> <span class="badge badge-secondary">Review Tasks</span></h4>
	@foreach($crude->tasks as $crude)
		<p>{{ $crude->body }}</p>
	@endforeach
</div>
@endif
@endsection