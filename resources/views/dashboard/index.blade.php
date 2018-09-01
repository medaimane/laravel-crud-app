@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                    <a role="button" class="btn btn-outline-primary float-right" href="/posts/create">Create Post</a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Your Blog Posts</h4>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
