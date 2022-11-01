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


@endsection