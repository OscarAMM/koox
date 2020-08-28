@extends('layouts.guest')
@section('content')
<div class="container-fluid">
    <nav class="navbar navbar-light navbar-expand-md bg-light justify-content-md-center shadow-sm"
        style="background-color:#F8F9FA">
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
</div>
<div class="container">

</div>
@endsection