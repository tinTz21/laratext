@extends('layouts.master')

@section('contents')

<ul>
	<h4 class="title">{{ $crude->title }}</h1>
		<p>-- {{ $crude->project }}</p>
</ul>
<p> <a href="/crude/{{ $crude->id }}/edit">Edit</a></p>

@endsection