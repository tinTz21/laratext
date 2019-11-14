@extends('layouts.master');

@section('contents')

<form method="POST" action="/crude">
  @csrf
  <div class="form-group row">
    <label for="title"  class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-6">
      <input type="text" name="title"  class="form-control" id="title" placeholder="Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="project" value="project" class="col-sm-2 col-form-label">Project...</label>
    <div class="col-sm-6">
      <textarea name="project" class="form-control" id="project" placeholder="Your Project Description"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Store</button>
    </div>
  </div>
</form>

@endsection