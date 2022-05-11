@extends('layouts/layout')

<style>
	.btn{
		padding: 15px;
		background-color: lightgrey;
		border-radius: 20px 20px 0 0;
		cursor: pointer;
		font-weight: 800;
	}
</style>

@section('title', 'List of Tasks')

@section('main')

	<div class="task-list">
		<a class='btn' href='/ordered'> Order by name</a>
	</div>

	<div class="task-list">
		@foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
				<a href="/task/{{ $task->id }}" class="card-footer-item">Show task ></a>
			</div>
		</div>
		@endforeach
	</div>
@endsection