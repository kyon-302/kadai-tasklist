@extends('layouts.app')

@section('content')

    <h1>タスク詳細ページ</h1>
    
    <p class='h3'> {{ $task->content }}</p>
    <p class='h3'> 状況: {{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスクの編集', ['id' => $task->id],['class' => 'btn btn-default']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection