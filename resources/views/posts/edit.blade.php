@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Post</h3>
    <div class="container">
        @if (!is_null($post))
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Title')}}
                {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'new post title', 'required'=>'true'])}} {{-- 'required'=>'true' --}}
                <small class="form-text text-muted">We'll give a simple clearly title.</small>
            </div>
            <div class="form-group">
                {{ Form::label('body', 'Body')}}
                {{ Form::textArea('body', $post->body, ['id' => 'bodyArea', 'class' => 'form-control', 'placeholder' => 'new post body content', 'required'=>'true'])}}
                <small class="form-text text-muted">We'll give a body for your post.</small>
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Update', ['class' => 'btn btn-success']) }}
            <a href="/posts/{{$post->id}}" class="btn btn-info" role="button">Cancel</a>
        {!! Form::close() !!}
        @endif
    </div>
    <script>
        CKEDITOR.replace( 'bodyArea' );
    </script>
</div>
@endsection
