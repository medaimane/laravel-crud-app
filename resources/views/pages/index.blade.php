@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h2>Welcome To {{config('app.name', 'MASApp')}}</h2>
        <p class="lead">The best blog app in your hands</p>
        <a class="btn btn-lg btn-primary" href="/login" role="button">Login</a>
        <a class="btn btn-lg btn-success" href="/register" role="button">Register</a>
    </div>
@endsection
