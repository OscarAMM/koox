@extends('layouts.guest')
@section('content')
<!--- LOGO --->
<div class="container-fluid text-center" style="background-color: #DDDDDD;">
    <ul class="list-inline">
        <li class="list-inline-item " style="color:#344A40">
            <p class="d-none d-md-inline d-sm-none">Contacta con nosotros en los siguientes enlaces</p>
        </li>
        <li class="list-inline-item text-right">
            <p style="color:#344A40;"><a href="#"><i class="fas fa-at"></i> Escríbenos</a></p>
        </li>
        <li class="list-inline-item text-right">
            <p style="color:#344A40;"><a href="#"><i class="fa fa-phone"></i> Llámanos</a></p>
        </li>
        <li class="list-inline-item text-right">
            <p style="color:#344A40;"><a href="https://www.facebook.com/educacionyucatan" target="_blank"><i
                        class="fab fa-facebook"></i> Síguenos </a></p>
        </li>
    </ul>
</div>
<div class="container">
    <img src="{{asset('images/logoSegey.png')}}" alt="logo-segey" class="img-fluid" width="350px"
        style="margin-bottom:24px; margin-top:24px;">
</div>
<!---- FIN LOGO --->
<!---- NAV BAR --->
<nav class="navbar navbar-light navbar-expand-md bg-light justify-content-md-center ">
    <a class="navbar-brand font-weight-bold d-md-none d-inline" href="{{route('welcome')}}">Ko'ox Tsikbal</a>
    <button class="navbar-toggler justify-content-end ml-3" type="button" data-toggle="collapse"
        data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-md-center text-left">
            <li class="nav-item">
                <a class="nav-link" href="http://recursoseducativos.segey.gob.mx/" target="_blank">Recursos
                    educativos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('question')}}">Preguntas frecuentes</a>
            </li>
            <li class="nav-item my-auto">
                <a class="nav-link navbar-brand mx-0 d-none font-weight-bold d-md-inline" href="{{route('welcome')}}">Ko'ox
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
                <img src="{{asset('images/banner.png')}}" alt="banner"class="img-fluid"
                    style="margin-top:32px; margin-bottom:32px;">
            </div>
        </div>
    </div>
    <!--fin banner --->
    <div class="border-bottom"></div>
    <div class="row mt-3 text-justify">
        <div class="col-md-2 col-lg-2 col-sm-2 text-center">
            <img src="{{asset('images/hex7.jpg')}}" alt="koox-left" class="img-fluid">
        </div>
        <div class="col-md-10 col-lg-10 col-sm-10 font-p">
            <p>La contingencia por COVID-19 ha desafiado a todos los sistemas educativos.</p>
            <p>Las y los docentes nos enfrentamos a una situación en la que se requieren nuevas competencias</p>
            <p>El acompañamiento a través de un diálogo entre colegas permitirá compartir nuestros saberes y
                construir caminos que permitan que todas y todos avancemos, que nadie se quede atrás</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-2">
            <h4 class="text-white text-center font-weight-bold" style="background-color:#F18B39; font-family:'Panton'">
                Objetivo</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm-8 col-lg-8 font-p">
            <p>Acompañar a las figuras educativas mediante un diálogo constructivo orientado al desarrollo de
                prácticas educativas pertinentes e incluyentes que respondan a las necesidades de educación a
                distancia en Yucatán.
            </p>
            <p>
                Con estrategias apoyadas en la formación contínua, sugerencias y guías; acompañamiento y atención
                vía telefónica, correo y redes sociales de la SEGEY para responder dudas y ampliar información</p>
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
                            <div class="tab-pane fade show active border border-secondary font-p" id="parent"
                                role="tabpanel" aria-labelledby="parent-tab">
                                <p class="text-justify ml-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consequuntur
                                    enim
                                    magnam
                                    est
                                    a,
                                    animi atque ex quia placeat non quod odio vitae magni. Fugiat, deserunt. Id
                                    incidunt
                                    iusto
                                    doloribus?</p>
                                <div class="card-footer card-back-color">
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn  btn-link text-white text-center">Infografías
                                                Guía
                                                para
                                                eduación a
                                                distancia</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Qué herramientas
                                                para la
                                                educación están
                                                a tu alcance</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Identifica los
                                                canales y
                                                horas de
                                                clases</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Haz un horario
                                                de
                                                actividades</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">¿Cómo apoyar a
                                                mi
                                                hij@ en
                                                clases?</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <p class="text-white text-center"><i class="fa fa-copyright"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="teacher" role="tabpanel"
                                aria-labelledby="teacher-tab">
                                <p class="text-justify ml-2">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius animi est, fuga
                                    sit
                                    illo
                                    sunt
                                    voluptatum accusantium totam recusandae quo quas ea ratione dolores temporibus
                                    asperiores
                                    eveniet ipsum molestiae! Vel.
                                </p>
                                <div class="card-footer card-back-color">
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn  btn-link text-white text-center">Infografías
                                                Guía
                                                para
                                                eduación a
                                                distancia</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Qué herramientas
                                                para la
                                                educación están
                                                a tu alcance</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Identifica los
                                                canales y
                                                horas de
                                                clases</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Haz un horario
                                                de
                                                actividades</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">¿Cómo apoyar a
                                                mi
                                                hij@ en
                                                clases?</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <p class="text-white text-center"><i class="fa fa-copyright"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="principal" role="tabpanel"
                                aria-labelledby="principal-tab">
                                <p class="text-justify ml-2"> Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Magni, soluta porro quia qui
                                    earum
                                    deserunt,
                                    numquam tempore nihil ad similique mollitia repudiandae eos dignissimos fugit
                                    molestiae.
                                    Perferendis fuga quibusdam laudantium.</p>
                                <div class="card-footer card-back-color">
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn  btn-link text-white text-center">Infografías
                                                Guía
                                                para
                                                eduación a
                                                distancia</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Qué herramientas
                                                para la
                                                educación están
                                                a tu alcance</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Identifica los
                                                canales y
                                                horas de
                                                clases</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Haz un horario
                                                de
                                                actividades</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">¿Cómo apoyar a
                                                mi
                                                hij@ en
                                                clases?</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <p class="text-white text-center"><i class="fa fa-copyright"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="supervisor" role="tabpanel"
                                aria-labelledby="supervisor-tab">
                                <p class="text-justify ml-2"> Lorem
                                    ipsum, dolor sit amet consectetur adipisicing elit. Sint cum et repudiandae esse
                                    fuga,
                                    culpa
                                    voluptates distinctio rem beatae recusandae laboriosam voluptas nobis explicabo,
                                    eaque
                                    adipisci
                                    soluta labore. Similique, quo?
                                </p>
                                <div class="card-footer card-back-color">
                                    <div class="row">

                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn  btn-link text-white text-center">Infografías
                                                Guía
                                                para
                                                eduación a
                                                distancia</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Qué herramientas
                                                para la
                                                educación están
                                                a tu alcance</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Identifica los
                                                canales y
                                                horas de
                                                clases</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Haz un horario
                                                de
                                                actividades</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">¿Cómo apoyar a
                                                mi
                                                hij@ en
                                                clases?</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <p class="text-white text-center"><i class="fa fa-copyright"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade border border-secondary" id="connection" role="tabpanel"
                                aria-labelledby="connection-tab">
                                <p class="text-justify ml-2">
                                    Lorem
                                    ipsum, dolor sit amet consectetur adipisicing elit. Odio id ipsa officiis ad
                                    ipsum
                                    ab
                                    eligendi,
                                    quam veritatis minus voluptas, nihil quae et cumque fugit explicabo magni dolor
                                    molestiae
                                    aut.
                                </p>
                                <div class="card-footer card-back-color">
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn  btn-link text-white text-center">Infografías
                                                Guía
                                                para
                                                eduación a
                                                distancia</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Qué herramientas
                                                para la
                                                educación están
                                                a tu alcance</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Identifica los
                                                canales y
                                                horas de
                                                clases</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">Haz un horario
                                                de
                                                actividades</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <a href="#" class="btn btn-link text-white text-center">¿Cómo apoyar a
                                                mi
                                                hij@ en
                                                clases?</a>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                            <p class="text-white text-center"><i class="fa fa-copyright"></i></p>
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
                        <img src="{{asset('images/sep.png')}}" class="img-fluid rounded-circle" width="80" alt="sep_logo"
                            title="Secretaría de Educación Pública">
                    </a>
                </li>
                <li class="list-inline-item mx-3 mt-2 mb-2">
                    <a href="http://www.yucatan.gob.mx/" target="_blank">
                        <img src="{{asset('images/yucatan.png')}}" alt="segey_logo" class="img-fluid rounded-circle" width="80"
                            title="Gobierno de Yucatán">
                    </a>
                </li>
                <li class="list-inline-item mx-3 mt-2 mb-2">
                    <a href="http://www.educacion.yucatan.gob.mx/" target="_blank">
                        <img src="{{asset('images/segey.png')}}" alt="segey_logo" class="img-fluid rounded-circle" width="80"
                            title="SEGEY">
                    </a>
                </li>
                <li class="list-inline-item mx-3 mt-2 mb-2">
                    <a href="http://formacioncontinua.sigeyucatan.gob.mx/" target="_blank">
                        <img src="{{asset('images/formacion.png')}}" alt="formacion_logo" class="img-fluid rounded-circle" width="80"
                            title="Formación Continúa">
                    </a>
                </li>
                <li class="list-inline-item mx-3 mt-2 mb-2">
                    <a href="#" target="_blank">
                        <img src="{{asset('images/foro.png')}}" alt="foro_logo" class="img-fluid rounded-circle" width="80"
                            title="Foro">
                    </a>
                </li>
                <li class="list-inline-item mx-3 mt-2 mb-2">
                    <a href="https://www.aprendeencasa.mx/aprende-en-casa/" target="_blank">
                        <img src="{{asset('images/aprende.png')}}" alt="aprende_logo" class="img-fluid rounded-circle" width="80"
                            title="Aprende en casa">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<footer>
    <div class="container-fluid" style="background-color: #343A40;">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-white font-weight-bolder text-center mt-3">SEGEY</h4>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <hr style="height:6px;color:gray;background-color:#F18B39">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                <img src="{{asset('images/EscudoArmas_gris.png')}}" alt="Logo" class="img-fluid">
            </div>
            <div class="col-md-5 text-left">
                <ul class="list-unstyled text-white small ">
                    <li>Secretaría de Educación del Gobierno del Estado de Yucatán</li>
                    <li><i class="fas fa-map-marker-alt"></i> Calle 34 No.101A x 25.Col.García Ginerés C.P.97070</li>
                    <li>Mérida, Yucatán, México</li>
                    <li><i class="fas fa-phone-alt"></i> 999 930 39 50</li>
                </ul>
            </div>
            <div class="col-md-2 text-left">
                <ul class="list-unstyled text-white small">
                    <li><a href="{{route('question')}}" class="text-white"> <i class="far fa-question-circle"></i> Preguntas
                            frecuentes</a></li>
                    <li><a href="#" class="text-white"> <i class="fas fa-lock"></i> Avisos de privacidad </a></li>
                    <li><a href="#" class="text-white"> <i class="fas fa-envelope"></i> Contacto </a></li>
                </ul>
            </div>
            <div class="col-md-2 text-left">
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
</footer>
@endsection