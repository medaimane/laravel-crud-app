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
                        <a href="#" class="btn btn-sm btn-danger" role="button" data-toggle="modal" data-target="#delete{{$post->id}}">Delete</a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="delete{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete this post!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
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
