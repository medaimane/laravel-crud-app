@extends('layouts.app')

@section('content')
    <h3>Create Post</h3>
    <div class="container">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Title')}}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'new post title', 'required'=>'true'])}} {{-- 'required'=>'true' --}}
                <small class="form-text text-muted">We'll give a simple clearly title.</small>
            </div>
            <div class="form-group">
                {{ Form::label('body', 'Body')}}
                {{ Form::textArea('body', '', ['class' => 'form-control', 'placeholder' => 'new post body content', 'required'=>'true'])}}
                <small class="form-text text-muted">We'll give a body for your post.</small>
            </div>
            {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
            <a href="/posts" class="btn btn-info" role="button">Cancel</a>
        {!! Form::close() !!}
    </div>
@endsection
