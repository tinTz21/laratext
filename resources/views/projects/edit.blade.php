@extends('layouts.master')

@section('contents')
<div class="div">
	<h4>Edit {{$projects->title}} Project</h4>
	<form method="POST" action="/projects/{{ $projects->id}}">
		@method('PATCH')
		@csrf
  <div class="form-group">

    <input type="text" class="form-control" value="{{ $projects->title }}" name="title" id="title" aria-describedby="text" >
    <small id="title" class="form-text text-muted">project title will be edited here</small>
  </div>
  <div class="form-group">

    <textarea class="form-control"  name="description" id="description" >{{ $projects->description }}</textarea>
  </div>
  <button type="submit" class="btn btn-outline-primary">Update</button>
</form>
<nav class="nav-left">
	<form method="POST" action="/projects/{{ $projects->id }}">
		@method('DELETE')
		@csrf
		<button type="button" class="btn btn-outline-danger">delete</button>
	</form>
</nav>
</div>
@endsection