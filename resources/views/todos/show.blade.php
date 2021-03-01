@extends('layouts.app')


@section('title')
{{$todo->name}}
@endsection
@section('content')

<h1 class="text-center my-5">{{$todo->name}}</h1>
<div class="row justify-content-center my-5">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{$todo->description}}

            </div>
        </div>
        <a href="/todos/{{$todo->id}}/edit" class="btn btn-outline-dark my-3">Edit</a>
        <a href="/todos/{{$todo->id}}/delete" class="btn btn-outline-danger my-3">Delete</a>

    </div>
</div>

@endsection