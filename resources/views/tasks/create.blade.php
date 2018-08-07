@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

<h1>タスク新規作成ページ</h1>

<div class = "row">
        <div class = "col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
        

        <!--    {!! Form::model($task, ['route' => 'tasks.index']) !!}
                
                        <div class = "form-group">
                                {!! Form::label('content', 'タスク:') !!}
                                {!! Form::text('content',null, ['class' => 'form-control']) !!}
                        </div>        
                        
                        <div class = "form-group">
                                {!! Form::label('status', 'ステータス:') !!}
                                {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        </div>
                        
                        {!! Form::submit('投稿') !!}
                
                {!! Form::close() !!}   -->
                
                        @if (Auth::id() == $user->id)
                                  {!! Form::open(['route' => 'tasks.store']) !!}
                                        <div class = "form-group">
                                                {!! Form::label('content', 'タスク:') !!}
                                                {!! Form::text('content',null, ['class' => 'form-control']) !!}
                                        </div>        
                                        
                                        <div class = "form-group">
                                                {!! Form::label('status', 'ステータス:') !!}
                                                {!! Form::text('status', null, ['class' => 'form-control']) !!}
                                        </div>
                        
                                                {!! Form::submit('投稿') !!}
                                  {!! Form::close() !!}
                        @endif
                
        </div>        
</div>        

@endsection