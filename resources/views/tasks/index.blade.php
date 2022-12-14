@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>

@if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
                <th>いつまでに</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['task' =>$task->id]) !!}</td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->limit}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

{{-- メッセージ作成ページへのリンク --}}
{!! link_to_route('tasks.create', '新規タスク入力', [], ['class' => 'btn btn-primary']) !!}

@endsection