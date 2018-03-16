@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>
    @if(count($tasks) > 0)
        @foreach($tasks as $task)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/tasks/{{$task->id}}">{{$task->title}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
        {{$tasks->links()}}
    @else
        <p>No tasks found</p>
    @endif
@endsection