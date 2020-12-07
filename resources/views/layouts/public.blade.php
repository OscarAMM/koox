<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Koox tsikbal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--reload sin refresh-->
    <!--
   <script language="javascript" src="js/jquery-1.2.6.min.js"></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">
</head>

<body class="vh-100">
    <div id="app" style="background-color:#ffffff">
        <main>
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container-fluid mt-3" style="background-color: #DDDDDD">
                <h5 class="text-center font-weight-bold mt-2">Sitios de interés</h5>
                <div class="row d-flex justify-content-center">
                    <ul class="list-inline ">
                        <li class="list-inline-item mx-3 mt-2 mb-2">
                            <a href="https://www.gob.mx/sep" target="_blank">
                                <img src="{{asset('images/sep.png')}}" class="img-fluid rounded-circle" width="80"
                                    alt="sep_logo" title="Secretaría de Educación Pública">
                            </a>
                        </li>
                        <li class="list-inline-item mx-3 mt-2 mb-2">
                            <a href="http://www.yucatan.gob.mx/" target="_blank">
                                <img src="{{asset('images/yucatan.png')}}" alt="segey_logo"
                                    class="img-fluid rounded-circle" width="80" title="Gobierno de Yucatán">
                            </a>
                        </li>
                        <li class="list-inline-item mx-3 mt-2 mb-2">
                            <a href="http://www.educacion.yucatan.gob.mx/" target="_blank">
                                <img src="{{asset('images/segey.png')}}" alt="segey_logo"
                                    class="img-fluid rounded-circle" width="80" title="SEGEY">
                            </a>
                        </li>
                        <li class="list-inline-item mx-3 mt-2 mb-2">
                            <a href="http://formacioncontinua.sigeyucatan.gob.mx/" target="_blank">
                                <img src="{{asset('images/formacion.png')}}" alt="formacion_logo"
                                    class="img-fluid rounded-circle" width="80" title="Formación Continúa">
                            </a>
                        </li>
                        <li class="list-inline-item mx-3 mt-2 mb-2">
                            <a href="#" target="_blank">
                                <img src="{{asset('images/foro.png')}}" alt="foro_logo" class="img-fluid rounded-circle"
                                    width="80" title="Foro">
                            </a>
                        </li>
                        <li class="list-inline-item mx-3 mt-2 mb-2">
                            <a href="https://www.aprendeencasa.mx/aprende-en-casa/" target="_blank">
                                <img src="{{asset('images/aprende.png')}}" alt="aprende_logo"
                                    class="img-fluid rounded-circle" width="80" title="Aprende en casa">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid" style="background-color: #343A40;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="text-white font-weight-bolder text-center mt-3">SEGEY</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 text-left">
                            <hr style="height:6px;color:gray;background-color:#F18B39; width:50px; margin-right:100%;">
                            <img src="{{asset('images/EscudoArmas_gris.png')}}" alt="Logo" class="img-fluid">
                        </div>
                        <div class="col-md-5 text-left">
                            <hr style="height:6px;color:gray;background-color:#F18B39; width:50px; margin-right:100%;">
                            <ul class="list-unstyled text-white small ">
                                <li>Secretaría de Educación del Gobierno del Estado de Yucatán</li>
                                <li><i class="fas fa-map-marker-alt"></i> Calle 34 No.101A x 25.Col.García Ginerés
                                    C.P.97070
                                </li>
                                <li>Mérida, Yucatán, México</li>
                                <li><i class="fas fa-phone-alt"></i> 999 930 39 50</li>
                            </ul>
                        </div>
                        <div class="col-md-2 text-left">
                            <hr style="height:6px;color:gray;background-color:#F18B39; width:50px; margin-right:100%;">
                            <ul class="list-unstyled text-white small">
                                <li><a href="{{route('question')}}" class="text-white"> <i
                                            class="far fa-question-circle"></i>
                                        Preguntas
                                        frecuentes</a></li>
                                <li><a href="#" class="text-white"> <i class="fas fa-lock"></i> Avisos de privacidad
                                    </a>
                                </li>
                                <li><a href="#" class="text-white"> <i class="fas fa-envelope"></i> Contacto </a></li>
                                <!-- Authentication Links -->
                                @guest
                                <li class="list-inline-item">
                                    <p class="text-white"> <a href="{{ route('login') }}" class="text-white"><i
                                                class="fas fa-sign-in-alt"></i>
                                            {{ __('Iniciar sesión') }}</a></p>
                                </li>
                                @else
                                <li class="list-inline-item dropdown">
                                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fas fa-user" style="color:#344A40;"></i> {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                                        </a>
                                        @if(Auth::user()->hasRole('Administrador'))
                                        <a class="dropdown-item" href="{{route('home')}}">
                                            <i class="fas fa-cog"></i> Administrar sitio
                                        </a>
                                        @endif
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                        <div class="col-md-2 text-left">
                            <hr style="height:6px;color:gray;background-color:#F18B39; width:50px; margin-right:100%;">
                            <span class="text-white">Siguenos en:</span>
                            <ul class="list-unstyled text-white small">
                                <li><a href="https://www.facebook.com/educacionyucatan" class="text-white"
                                        target="_blank"><i class="fab fa-facebook"></i>
                                        /educacionyucatan</a></li>
                                <li><a href="https://twitter.com/educacionyuc" class="text-white" target="_blank"><i
                                            class="fab fa-twitter"></i> @educacionyuc</a>
                                </li>
                                <li><a href="https://www.instagram.com/educacionyucatan/" class="text-white"
                                        target="_blank"><i class="fab fa-instagram"></i> @educacionyucatan</a></li>
                                <li><a href="https://www.youtube.com/channel/UCEtOqLXpgUPf8XuuBgkQx9g"
                                        class="text-white" target="_blank"><i class="fab fa-youtube"></i>
                                        /educacionyuc</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>