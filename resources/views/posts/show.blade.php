@extends('layouts.app')

@section('content')
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
    <div style="margin:7px;">
        <a href="{{url('posts')}}" class="btn btn-default">Go back</a>
    </div>
@endsection
