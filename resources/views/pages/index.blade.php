@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h2>Welcome To {{config('app.name', 'MASApp')}}</h2>
        <p class="lead">The best blog app in your hands</p>
        @guest
            <a class="btn btn-lg btn-primary" href="/login" role="button">Login</a>
            <a class="btn btn-lg btn-success" href="/register" role="button">Register</a>
        @else
        <div class="card card-body">
            <h3 class="card-title">{{ Auth::user()->name }}</h3>
            <p class="card-text">{{ Auth::user()->email }}</p>
            <small class="text-muted">{{ Auth::user()->created_at }}</small>
        </div>
        @endguest
    </div>
</div>
@endsection
