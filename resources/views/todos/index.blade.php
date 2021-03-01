@extends('layouts.app')

@section('title')
Todos List
@endsection

@section('content')
<h1 class="text-center my-5" style="font-size:55px;">TODOS</h1>

<div class="row justify-content-center">
    <div class="col-md-8 ">
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)

                    @if($todo->isCompleted)
                    <li class="list-group-item" style="display:flex;justify-content:space-between;align-items:center;background-color:rgba(0,0,0,0.1); ">
                        @else
                    <li class="list-group-item" style="display:flex;justify-content:space-between;align-items:center">
                        @endif
                        {{$todo->name}}
                        <div class="buttons">

                            <a href="/todos/{{$todo->id}}" class="btn btn-outline-primary btn-sm">More Info</a>
                            @if(!$todo->isCompleted)
                            <a href="/todos/{{$todo->id}}/complete" id="completed" class="btn btn-outline-warning btn-sm">Mark as Complete</a>
                            @endif
                        </div>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection