@extends('layouts.master')

@section('contents')
<div class="container-fluid">
	@foreach($crude as $crude)
	<a href="/crude/{{ $crude->id }}"><h3> {{ $crude->title }}</h3></a>
	<p>{{ $crude->id }}</p>
	@endforeach
</div>
<div class="form-group row">
    <div class="col-sm-10">
      <a href="/crude/create"><button type="submit" class="btn btn-primary">Create New</button></a>
    </div>
  </div>
@endsection