<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}}</title>
    {{Html::style('css/app.css')}}
    {{Html::script('js/app.js')}}
    {{--{{Html::script('ts/app.js')}}--}}
</head>
<body>
@yield('content')
</body>
</html>