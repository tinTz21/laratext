@extends('layouts.master')

@section('contents')
<div class="div">
	<h4>Edit Projects</h4>
	<form method="POST" action="/projects/{{ $projects->id}}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
  <div class="form-group">

    <input type="text" class="form-control" value="{{ $projects->title }}" name="title" id="title" aria-describedby="text" >
    <small id="title" class="form-text text-muted">Your awesome project title will be edited here</small>
  </div>
  <div class="form-group">

    <textarea class="form-control"  name="description" id="description" >{{ $projects->description }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Edit Project</button>
</form>
<nav class="nav-left">
	<form method="POST" action="/projects/{{ $projects->id }}">
		@method('DELETE')
		@csrf
		<button class="my-1" type="Delete Project" class="btn btn-danger">Delete Project</button>
	</form>
</nav>
</div>
@endsection