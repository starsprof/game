<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
{{--<div id="app">--}}


<h1 style="color: white">Игра "Найди пару"</h1>

    <div class="games-block" style="position: absolute; top: 40%; z-index: 2; width: 100%">
        <div class="container">
        <div class="row">
            <a href="{{ url('/people') }}" class="game-item col-md-4">
                <h2>People</h2>
                <div  style="background: white; height: 250px;">
                    <img src="{{asset('img/2.png')}}" style="display: block;     padding: 60px 0; margin: 0 auto">
                </div>
            </a>
            <a href="{{ url('/smail') }}" class="game-item col-md-4">
                <h2>Smail</h2>
                <div  style="background: white; height: 250px;">
                    <img src="{{asset('img/60.png')}}" style="display: block;     padding: 60px 0; margin: 0 auto">
                </div>
            </a>
            <a href="{{ url('/sport') }}" class="game-item col-md-4">
                <h2>Sport</h2>
                <div  style="background: white; height: 250px;">
                    <img src="{{asset('img/13.png')}}" style="display: block;     padding: 60px 0; margin: 0 auto">
                </div>
            </a>
        </div>
    </div>

</div>

{{--<main class="py-4">--}}
{{--@yield('content')--}}
{{--</main>--}}

{{--</div>--}}
<canvas id=c></canvas>
<canvas id=bg></canvas>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
