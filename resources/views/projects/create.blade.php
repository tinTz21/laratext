@extends('layouts.master')
@section('contents')

	<form action="/projects" method="POST">
		{{ csrf_field() }}
  <div class="form-group">
    <label for="text">Project Title</label>
    <input type="text" value="{{ old('title')}}"  class="form-control" name="title" id="title" aria-describedby="text" placeholder="Your Project Title">
    <small id="title" class="form-text text-muted">Your awesome project title will be set here</small>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" placeholder="Description">{{old('description')}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  @if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $errors)
    {{$errors}}
    @endforeach
  </div>
  @endif
</form>
@endsection
