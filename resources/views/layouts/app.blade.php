<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'MASApp')}}</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('includes.navbar')
        <main role="main" class="container">
            @include('includes.messages')
            @yield('content')
        </main>
        @include('includes.footer')
    </body>
</html>
