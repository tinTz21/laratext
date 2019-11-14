@extends('layouts.master')

@section('contents')

<form method="POST" action="/crude/{{ $crude->id }}">
  @csrf
  @method('PATCH')
  <div class="form-group row">
    <label for="title"  class="col-sm-2 col-form-label">Edit Title</label>
    <div class="col-sm-6">
      <input type="text" name="title"  class="form-control" value="{{ $crude->title }}" id="title" >
    </div>
  </div>
  <div class="form-group row">
    <label for="project" value="project" class="col-sm-2 col-form-label">Project...</label>
    <div class="col-sm-6">
      <textarea name="project" class="form-control" id="project" >{{ $crude->project}}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">UPDATE</button>
    </div>
  </div>
</form>

<form method="POST" action="/crude/{{ $crude->id }}">
	@csrf
	@method('DELETE')
	<div class="col-sm-10">
      <button type="submit" class="btn btn-danger">DELETE CONTENT</button>
    </div>
</form>

@endsection