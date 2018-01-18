@extends('layout')

@section('title', 'Dashboard')

@section('content')

    @foreach($taskLists as $taskList)
        <h1>{{$taskList->name}}</h1>
        <ul>
            @foreach($taskList -> tasks as $task)
                <li>
                    <input @if ($task->status->id == 2) checked="checked" @endif class="form-check-input position-static task" type="checkbox" value="{{$task->id}}" aria-label="...">
                    <span @class(['strike' => $task->status->id == 2])>{{$task->description}}</span>
                    <a href="/task/delete/{{$task->id}}">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </li>
            @endforeach
        </ul>
    @endforeach

    <div>
        <form class="form-inline" method="post" action="/task/new">
            <input type="hidden" name="list_id" value="{{$taskList->id}}">
            <input type="hidden" name="status_id" value="1">

            <div class="form-group mx-sm-3 mb-2">
                <label for="task" class="sr-only">Taak</label>
                <input type="text" class="form-control" id="decription" name="description" placeholder="Nieuwe taak">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>

    </div>

@endsection