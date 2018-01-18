@extends('layout')

@section('title', 'Task search')

@section('content')

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Tasks</span>
        </div>
        <input id="tasks" type="text" placeholder="Search..." aria-label="Tasks" aria-describedby="basic-addon1">
    </div>

@endsection