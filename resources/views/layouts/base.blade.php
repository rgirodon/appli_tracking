<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title ?? config('app.name')}}</title>
    {{Html::style('css/app.css')}}
    {{Html::script('js/app.js')}}
</head>
<body>

<header class="text-center">
    <h1 class="my-auto"><a href="{{ url('/') }}">{{config('app.name')}}</a></h1>
</header>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-5">
    <div class="container">
        <div class="row justify-content-end w-100">
            <div class="" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @yield('logout')
                </ul>
            </div>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>