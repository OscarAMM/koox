@extends('layouts.guest')
@section('content')
<!--- LOGO --->
<div class="container-fluid text-center" style="background-color: #DDDDDD;">
    <ul class="list-inline">
        <li class="list-inline-item " style="color:#344A40">
            <p class="d-none d-md-inline d-sm-none">Contacta con nosotros en los siguientes enlaces</p>
        </li>
        <li class="list-inline-item text-right">
            <p style="color:#344A40"><a href="#" style="color:#344A40;"><i class="fas fa-at"></i> Escríbenos</a></p>
        </li>
        <li class="list-inline-item text-right">
            <p style="color:#344A40;"><a href="#" style="color:#344A40;"><i class="fa fa-phone"></i> Llámanos</a></p>
        </li>
        <li class="list-inline-item text-right">
            <p style="color:#344A40;"><a href="https://www.facebook.com/educacionyucatan" target="_blank"
                    style="color:#344A40;"><i class="fab fa-facebook"></i> Síguenos </a></p>
        </li>
        @guest
        <li class="list-inline-item text-right">
            <p style="color:#344A40;" class="d-none d-md-inline d-sm-none"><a href="{{route('login')}}"
                    style="color:#344A40;"><i class="fas fa-sign-in-alt"></i> Iniciar
                    sesión</a></p>
        </li>
        @elseif(Auth::check() && Auth::user()->hasRole('Administrador'))
        <li class="list-inline-item text-right">
            <p style="color:#344A40;" class="d-none d-md-inline d-sm-none"><i class="fas fa-user"></i> <a
                    href="{{route('home')}}" style="color:#344A40;"> {{Auth::user()->name}}</a></p>
        </li>
        @else
        <li class="list-inline-item text-right">
            <p style="color:#344A40;" class="d-none d-md-inline d-sm-none"><i class="fas fa-user"></i>
                {{Auth::user()->name}}</p>
        </li>
        @endguest
    </ul>
</div>
<div class="container">
    <img src="{{asset('images/logoSegey.png')}}" alt="logo-segey" class="img-fluid" width="350px"
        style="margin-bottom:24px; margin-top:24px;">
</div>
<!---- FIN LOGO --->
<!---- NAV BAR --->
<nav class="navbar navbar-light navbar-expand-lg bg-light justify-content-lg-center">
    <a class="navbar-brand font-weight-bold d-md-none d-inline" href="{{route('welcome')}}">Ko'ox Tsikbal</a>
    <button class="navbar-toggler justify-content-end ml-3" type="button" data-toggle="collapse"
        data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-lg-center text-left">
            <li class="nav-item">
                <a class="nav-link" href="http://recursoseducativos.segey.gob.mx/" target="_blank"> Recursos
                    educativos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('question')}}">Preguntas frecuentes</a>
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

<!--- fin navbar -->
<!-- banner-->
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide text-center" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/banner.png')}}" alt="banner" class="img-fluid"
                    style="margin-top:32px; margin-bottom:32px;">
            </div>
        </div>
    </div>
    <!--fin banner --->
    <div class="border-bottom"></div>
    <div class="row mt-3 text-justify">
        <div class="col-md-3 col-lg-3 col-sm-3 text-center">
            <img src="{{asset('images/hex7.jpg')}}" alt="koox-left" class="img-fluid">
        </div>
        <div class="col-md-9 col-lg-9 col-sm-9 font-p">
            @if(count($content)>0)
            @foreach($content as $row)
            <p>{!!$row->first_paragraph!!}</p>
            @endforeach
            @else
            <p>No se tiene contenido aún. Estamos trabajando para mejorar.</p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-3">
            @if(count($content)>0)
            @foreach($content as $row)
            <h4 class="text-white text-center font-weight-bold" style="background-color:#F18B39; font-family:'Panton'">
                {{$row->sub_title}}
            </h4>
            @endforeach
            @else
            <h4 class="text-white text-center font-weight-bold" style="background-color:#F18B39; font-family:'Panton'">
                No contenido.
            </h4>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm-8 col-lg-8 font-p">
            @if(count($content)>0)
            @foreach($content as $objective)
            {!!$objective->objective_paragraph!!}
            @endforeach
            @else
            <p>No se tiene contenido aún. Estamos trabajando para mejorar.</p>
            @endif
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 text-center">
            <img src="{{asset('images/imagen01.png')}}" alt="koox-right" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-3">
            <h4 class="text-white text-center font-weight-bold" style="background-color:#353A40; font-family:'Panton'">
                ¿Cuál es tu perfil?</h4>
        </div>
    </div>

    <div class="row mb-2">
        <div class="d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="parent-tab" data-toggle="tab" href="#parent" role="tab"
                                    aria-controls="parent" aria-selected="true">Soy madre/padre de
                                    familia/tutor</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab"
                                    aria-controls="teacher" aria-selected="false">Soy docente</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="principal-tab" data-toggle="tab" href="#principal" role="tab"
                                    aria-controls="principal" aria-selected="false">Soy director(a)</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="supervisor-tab" data-toggle="tab" href="#supervisor" role="tab"
                                    aria-controls="supervisor" aria-selected="false">Soy
                                    supervisor(a)</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="connection-tab" data-toggle="tab" href="#connection" role="tab"
                                    aria-controls="connection" aria-selected="false">Soy enlace</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active border border-secondary" id="parent" role="tabpanel"
                                aria-labelledby="parent-tab">
                                <p class="text-justify ml-2">
                                    Mantienen comunicación con la o él docente de su hija o hijo y trabajan en
                                    conjunto con las autoridades educativas para promover la colaboración entre las
                                    y los integrantes de la escuela.
                                    Así mismo, son fuentes de apoyo tanto en el proceso educativo como en el ámbito
                                    emocional de su hija o hijo.
                                </p>
                                <div class="card-footer card-back-color">
                                    <div class="row">

                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/guides/004 guía madres y padres de familia.pdf"
                                                target="_blank" class="btn  btn-link text-white text-center">
                                                Guía
                                                para
                                                padres</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/parents/Infografía_padres de familia_libros de texto_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">
                                                Infografía Libros de texto
                                            </a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/parents/Infografía_padres de familia_radio y tv_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Radio y
                                                TV</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/parents/Infografía_padres de familia_herramientas digitales_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Herramientas
                                                digitales</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="teacher" role="tabpanel"
                                aria-labelledby="teacher-tab">
                                <p class="text-justify ml-2">
                                    Se encuentran en constante comunicación con estudiantes y padres o madres de
                                    familia.
                                    Generan condiciones para que las y los NNA de su grupo tengan la atención
                                    educativa a distancia y consideran el apoyo de un enlace solidario para
                                    propiciar redes de colaboración en comunidades donde no se tiene acceso a las
                                    TIC.
                                    Realizan procesos de coevaluación con padres y madres de familia para valorar el
                                    desempeño del estudio a distancia y las áreas de mejora de los NNA.

                                </p>
                                <div class="card-footer card-back-color">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/guides/003 guía docentes.pdf" target="_blank"
                                                class="btn  btn-link text-white text-center">Guía para docentes</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/teachers/Infografía_docentes_libros de texto_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Libros de
                                                texto</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/teachers/Infografía_docentes_radio y tv_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Radio y
                                                TV</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/teachers/Infografía_docentes_herramientas digitales_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Herramientas
                                                digitales</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="principal" role="tabpanel"
                                aria-labelledby="principal-tab">
                                <p class="text-justify ml-2">
                                    Siempre en contacto con las y los docentes de su centro de trabajo, el personal
                                    de apoyo y las madres y padres, además de integrar a las o los enlaces
                                    solidarios.
                                    Dan autonomía al área de docencia para establecer las estrategias pedagógicas de
                                    acuerdo con las características de sus estudiantes y apoyan en caso de alguna
                                    dificultad.
                                    .</p>
                                <div class="card-footer card-back-color">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/guides/002 guía directoras y directores.pdf" target="_blank"
                                                class="btn  btn-link text-white text-center">Guía
                                                para directores(as)</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/principal/Infografía_directores_libros de texto_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Libros de
                                                texto</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/principal/Infografía_directores_radio y tv_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Radio y
                                                TV</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/principal/Infografía_directores_herramientas digitales_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Herramientas
                                                digitales</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="supervisor" role="tabpanel"
                                aria-labelledby="supervisor-tab">
                                <p class="text-justify ml-2">
                                    Están en comunicación con directoras y directores, así como docentes de la zona
                                    escolar.
                                    Integran a las o los enlaces solidarios a dicha zona.
                                    Brindan autonomía a la dirección para establecer las estrategias pedagógicas
                                    adecuadas al contexto y acompañan al área de dirección o docencia al presentar
                                    dificultades.

                                </p>
                                <div class="card-footer card-back-color">
                                    <div class="row">

                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/guides/001 guía supervisoras y supervisores.pdf"
                                                target="_blank" class="btn  btn-link text-white text-center">Guía
                                                para supervisores(as)</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/supervisor/Infografía_supervisores_libros de texto_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Libros de
                                                texto</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/supervisor/Infografía_supervisores_radio y tv_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Radio y
                                                TV</a>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <a href="docs/info/supervisor/Infografía_supervisores_herramientas digitales_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Herramientas
                                                digitales</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="connection" role="tabpanel"
                                aria-labelledby="connection-tab">
                                <p class="text-justify ml-2">
                                    Funciona como vínculo de comunicación y apoyo educativo entre NNA de comunidades
                                    alejadas y docentes de educación básica, además que proviene de la misma
                                    comunidad y posee recursos como las TIC.
                                    Está presente en 3 momentos del proceso educativo: Planeación, Duración del
                                    proceso y Evaluación.

                                </p>
                                <div class="card-footer card-back-color">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                            <a href="docs/info/connection/Infografía_enlaces_libros de texto_09092020.pdf"
                                                target="_blank" class="btn btn-link text-white text-center">Infografía
                                                Libros de
                                                texto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer mt-auto py-3" style="background-color: #DDDDDD">
    <div class="container text-center mb-2">
        <h5 class="text-center font-weight-bold">Sitios de interés</h5>
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
                        <img src="{{asset('images/yucatan.png')}}" alt="segey_logo" class="img-fluid rounded-circle"
                            width="80" title="Gobierno de Yucatán">
                    </a>
                </li>
                <li class="list-inline-item mx-3 mt-2 mb-2">
                    <a href="http://www.educacion.yucatan.gob.mx/" target="_blank">
                        <img src="{{asset('images/segey.png')}}" alt="segey_logo" class="img-fluid rounded-circle"
                            width="80" title="SEGEY">
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
                        <img src="{{asset('images/aprende.png')}}" alt="aprende_logo" class="img-fluid rounded-circle"
                            width="80" title="Aprende en casa">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<footer>
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
                        <li><i class="fas fa-map-marker-alt"></i> Calle 34 No.101A x 25.Col.García Ginerés C.P.97070
                        </li>
                        <li>Mérida, Yucatán, México</li>
                        <li><i class="fas fa-phone-alt"></i> 999 930 39 50</li>
                    </ul>
                </div>
                <div class="col-md-2 text-left">
                    <hr style="height:6px;color:gray;background-color:#F18B39; width:50px; margin-right:100%;">
                    <ul class="list-unstyled text-white small">
                        <li><a href="{{route('question')}}" class="text-white"> <i class="far fa-question-circle"></i>
                                Preguntas
                                frecuentes</a></li>
                        <li><a href="#" class="text-white"> <i class="fas fa-lock"></i> Avisos de privacidad </a></li>
                        <li><a href="#" class="text-white"> <i class="fas fa-envelope"></i> Contacto </a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-left">
                    <hr style="height:6px;color:gray;background-color:#F18B39; width:50px; margin-right:100%;">
                    <span class="text-white">Siguenos en:</span>
                    <ul class="list-unstyled text-white small">
                        <li><a href="https://www.facebook.com/educacionyucatan" class="text-white" target="_blank"><i
                                    class="fab fa-facebook"></i>
                                /educacionyucatan</a></li>
                        <li><a href="https://twitter.com/educacionyuc" class="text-white" target="_blank"><i
                                    class="fab fa-twitter"></i> @educacionyuc</a>
                        </li>
                        <li><a href="https://www.instagram.com/educacionyucatan/" class="text-white" target="_blank"><i
                                    class="fab fa-instagram"></i> @educacionyucatan</a></li>
                        <li><a href="https://www.youtube.com/channel/UCEtOqLXpgUPf8XuuBgkQx9g" class="text-white"
                                target="_blank"><i class="fab fa-youtube"></i> /educacionyuc</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection