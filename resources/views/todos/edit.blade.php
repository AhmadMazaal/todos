@extends('layouts.app')

@section('title')
Create New Todo
@endsection


@section('content')

<h1 class="text-center my-5">Edit Todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card card-header">Edit Todo</div>
            <card class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">

                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-group-item">
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/todos/{{$todo->id}}/update" method="POST">
                    @csrf
                    <input type="text" name="todoId" hidden class="form-control">
                    <div class="mb-3">
                        <input value="{{$todo->name}}" placeholder="Name" type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Description" name="description" id="" cols="10" rows="5" class="form-control">{{$todo->description}}</textarea>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-outline-success text-center">Update Todo</button>
                    </div>
                </form>
            </card>
        </div>
    </div>
</div>

@endsection