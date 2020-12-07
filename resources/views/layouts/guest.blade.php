<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Koox tsikbal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column vh-100" style="background-color: #ffffff">
    <div id="app" style="background-color:#ffffff">
        <nav class="navbar navbar-light navbar-expand-lg bg-light justify-content-lg-center">
            <a class="navbar-brand font-weight-bold d-md-none d-inline" href="{{route('welcome')}}">Ko'ox Tsikbal</a>
            <button class="navbar-toggler justify-content-end ml-3" type="button" data-toggle="collapse"
                data-target="#collapsingNavbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-between align-items-center w-100"
                id="collapsingNavbar2">
                <ul class="navbar-nav mx-auto text-lg-center text-left">
                    <li class="nav-item">
                        <a class="nav-link" href="http://recursoseducativos.segey.gob.mx/" target="_blank"> Recursos
                            educativos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('questions_user_index')}}">Preguntas frecuentes</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link navbar-brand mx-0 d-none font-weight-bold d-md-inline"
                            href="{{route('welcome')}}">Ko'ox
                            Tsikbal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.kaambal.mx/" target="_blank">Kaambal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="http://www.educacion.yucatan.gob.mx/multimedia/publicaciones/200605_CalendarioCierreCiclo.pdf"
                            target="_blank">Calendario escolar</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
</body>

</html>