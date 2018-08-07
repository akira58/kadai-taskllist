@extends('layouts.app')

@section('content')


    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <p>タスク: {{ $task->content }}</p>
    <p>ステータス: {{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id])!!}
    
    @if (Auth::id() == $task->user_id)
        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger btn-xs']) !!}
        {!! Form::close() !!}
    @endif
    
    
    
    
    <!--{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    -->
@endsection