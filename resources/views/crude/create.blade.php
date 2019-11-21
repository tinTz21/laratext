@extends('layouts.master')

@section('contents')

<form method="POST" action="/crude">
  @csrf
  <div class="form-group row">
    <label for="title"  class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-6">
      <input type="text" name="title" value="{{ old('title') }}" class="form-control {{ $errors->has('title') ? 'alert-danger' : '' }}" id="title" placeholder="Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="project" value="project" class="col-sm-2 col-form-label">Project:</label>
    <div class="col-sm-6">
      <textarea name="project"  class="form-control {{ $errors->has('project') ? 'alert-danger' : '' }}" id="project" placeholder="Your Project Description">{{ old('project') }}</textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Store</button>
    </div>
  </div>
  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $errors)
      {{ $errors }}
      @endforeach
    </div>
  @endif
</form>

@endsection