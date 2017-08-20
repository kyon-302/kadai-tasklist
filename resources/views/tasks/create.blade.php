@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
        {!! Form::label('status', '状況:') !!}
        {!! Form::select('status', [''=>'','手を付けてない' => '手を付けてない','進行中' => '進行中', '完成' => '完成']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection