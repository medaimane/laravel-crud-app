@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin:7px;">
        <a href="{{url('posts')}}" class="btn btn-default">Go back</a>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-info" role="button">Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) }}
        {!! Form::close() !!}
    </div>
    @if (!is_null($post))
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{!! $post->body !!}</p>
            </div>
            <div class="card-footer">
                <small>Written on {{ $post->created_at}}</small>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-header">
                <h4>501 : Not yet done !</h4>
            </div>
        </div>
    @endif
</div>
@endsection
