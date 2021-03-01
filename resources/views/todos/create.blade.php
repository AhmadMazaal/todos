@extends('layouts.app')

@section('title')
Create New Todo
@endsection


@section('content')

<h1 class="text-center my-5">Create Todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card card-header">Create New Todo</div>
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
                <form action="/create-todo" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input placeholder="Name" type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Description" name="description" id="" cols="10" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-outline-success text-center">Create Todo</button>
                    </div>
                </form>
            </card>
        </div>
    </div>
</div>

@endsection