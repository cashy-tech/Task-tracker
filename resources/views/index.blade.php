@extends('layouts.app')

@section('title', 'This is a Task Tracker')

@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href='{{route('task.show', ['id' => $task->id])}}'>{{$task->title}}</a>
        </div>
    @empty
        <div>There are no tasks</div>
    @endforelse
@endsection
