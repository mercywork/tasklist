@extends('layouts.app')

@section('content')


<h1>id = {{ $task->id }} のタスク詳細ページ</h1>

<table class="table table-bordered">
    <tr>
        <th>id</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>タスク</th>
        <td>{{ $task->content }}</td>
    </tr>
    <tr>
        <th>いつまでに</th>
        <td>{{ $task->limit }}</td>
    </tr>
</table>
    <div class="edit">

    {!! link_to_route('tasks.edit','内容を変更する', ['task' => $task->id], ['class' => 'btn btn-primary']) !!}

    </div>

     {{-- メッセージ削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    
    {!! Form::close() !!}

@endsection