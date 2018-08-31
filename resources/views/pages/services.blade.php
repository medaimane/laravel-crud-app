@extends('layouts.app')

@section('content')
<div>
    <h3>{{ $title }}</h3>

    @if (count($services) > 0)
        <ul>
            @foreach ($services as $service)
                <li>{{ $service }}</li>
            @endforeach
        </ul>
    @else
        <p>No service</p>
    @endif
</div>
@endsection
