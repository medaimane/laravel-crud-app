@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    <a href="/posts/create">add post</a>
    @if (!is_null($posts) && count($posts) > 0)
        <div class="row">
        @foreach ($posts as $post)
            <div class="col-sm-4">
                <div class="card text-center" style="margin: 10PX;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text">Written on {{ $post->created_at}}</p>
                        <a href="{{url('posts', $post->id)}}" class="btn btn-sm btn-success">Read more</a>
                        <a href="#" class="btn btn-sm btn-danger" role="button">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div style="margin: 10PX;">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body">
                No post found
            </div>
        </div>
    @endif
@endsection
