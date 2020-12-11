@extends('layouts.public')
@section('content')
@include('modal.welcome_modal')
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('questions_user_index')}}">Preguntas frecuentes</a>
                    @if(Auth::check())
                    <a class="dropdown-item" href="{{route('forum_index')}}">Foro</a>
                    <a class="dropdown-item" href="{{route('new_ticket')}}">Realiza tu ticket</a>
                    @else
                    <a class="dropdown-item" href="{{route('forum_public_index')}}">Foro</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#welcome_modal">Realiza tu
                        ticket</a>
                    @endif
                </div>
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
    <div class="row my-auto text-center">
        <div class="col-md-12">
            <h3 class="font-weight-bold"><a href="#" class="btn btn-sm btn-primary">Conoce la estrategia</a></h3>
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


                        <nav>

                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach ($profiles as $row)
                                @if($row == Arr::first($profiles))
                                <a class="nav-item nav-link active" id="nav-{{$row->id}}-tab" data-toggle="tab"
                                    href="#nav-{{$row->id}}" role="tab" aria-controls="nav-{{$row->id}}"
                                    aria-selected="true">{{$row->profile_name}}</a>
                                @else

                                <a class="nav-item nav-link " id="nav-{{$row->id}}-tab" data-toggle="tab"
                                    href="#nav-{{$row->id}}" role="tab" aria-controls="nav-{{$row->id}}"
                                    aria-selected="false">{{$row->profile_name}}</a>
                                @endif
                                @endforeach
                            </div>

                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            @foreach($profiles as $content)
                            @if($content == Arr::first($profiles))

                            <div class="tab-pane fade show active" id="nav-{{$content->id}}" role="tabpanel"
                                aria-labelledby="nav-{{$content->id}}">
                                <p>
                                    {{$content->profile_content}}
                                </p>
                                @else
                                <div class="tab-pane fade" id="nav-{{$content->id}}" role="tabpanel"
                                    aria-labelledby="nav-{{$content->id}}">
                                    <p>
                                        {{$content->profile_content}}
                                    </p>
                                    @endif
                                    <div class="card-footer card-back-color">
                                        <div class="row">
                                            @foreach($content->file_profile as $file)
                                            <div class="col-sm-5 col-md-5 col-lg-5">
                                                <a href="{{route('file_download', $file->id)}}" target="_blank"
                                                    class="btn  btn-link text-white text-center">
                                                    {{$file->fileName}}</a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection