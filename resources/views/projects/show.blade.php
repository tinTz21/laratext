@extends('layouts.master')


@section('contents')
<div class="container-fluid">
	<nav class="col-md">
 	<h3>{{ $project->title }}</h3>
 	<p class="text-muted"><i>{{ $project->description }}</i></p>
	</nav>
	<a class="bg-warning" href="/projects/{{$project->id}}/edit">edit</a>
</div>
<!-- this is task form codes -->
@if($project->taxks->count())
	<div class="card">
  <div class="card-header">
    <a href="/projects" class="text-success">{{$project->title}}</a> task lists:
  </div>
  <div class="card-body">
    <p class="card-text">
    <div class="form-group form-check box">
    @foreach($project->taxks as $task)
    <form method="POST" action="/taxks/{{$task->id}}">
    @csrf
    @method('PATCH')
    <div class="form-check">
     <input type="checkbox" class="form-check-input" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked':''}} >
    	{{$task->task}}
    	</div>
    </form>
    @endforeach
    </p>
  </div>
  @endif

  <!-- submit task form -->
    <form method="POST" action="/projects/{{$project->id}}/task">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">New Task</label>
    <input type="text" class="form-control" aria-describedby="task" name="task" placeholder="type...">
    <small id="task" class="form-text text-muted">Add new task, it will appear on top of this field</small>
  </div>
  <button type="submit" class="btn btn-outline-primary">Store</button>
  @include('layouts.errors')
</form>
</div>
@endsection

	
	





