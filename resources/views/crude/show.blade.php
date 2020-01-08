@extends('layouts.master')

@section('contents')

  <nav class="col-md">
	<h4 class="title">{{ $crude->title }}</h4>
		<p>-- <i>{{ $crude->project }}</i></p><hr>
</nav>
<button type="button" class="btn btn-outline-warning btn-sm"><a href="/crude/{{$crude->id}}/edit">~Edit~</a></button>

<!-- Task card starts here -->

<div class="card">
  <div class="card-header">
    <p class="text-success">{{$crude->title}}<b class="text-dark"> Tasks lists</b> </p> 
  </div>
  <div class="card-body">
  <h5 class="card-title">checkbox marked indicates task is done</h5>
    <p class="card-text">
    @foreach($crude->tasks as $task)
  <form method="POST" action="/task/{{$task->id}}">
    @csrf
    @method('PATCH')
    	<div class="form-check">
  		<input class="form-check-input" name="completed" onChange="this.form.submit()" type="checkbox" {{$task->completed ? 'checked': ''}} >	
    			{{ $task->task }}
	    </div>
  </form>
    @endforeach
    </p>

    <!-- Button to create new task -->
    
    <form method="POST" action="/crude/{{$crude->id }}/tasks">
    @csrf
     
     <div class="form-group">
    <label for="task"><h5>create new task</h5></label>
    <input type="text" name="task" class="form-control" id="task" placeholder="type here...">
  </div>

  <div class="form-group">
  <button type="submit"  class="btn btn-outline-primary">Store</button>
  @include('layouts.errors')
</form>
  </div>
</div>

@endsection