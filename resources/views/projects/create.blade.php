@extends('layouts.master')
@section('contents')

	<form method="POST" action="/projects">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="title" placeholder="project title">
		</div>
		<div class="form-group">
			<textarea name="description" placeholder="Project description"></textarea>
		</div>
		<div class="form-group">
			<button type="submit">Submit</button>
		</div>
	</form>
@endsection
