@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="text-center my-3">
        <h1>¡Bienvenido a Ko'ox Tsikbal {{Auth::user()->name}}! </h1>
        <p class="lead">Aquí se podrá realizar las modificaciones del sistema, así como las consultas que se tengan por
            los usuarios.</p>
    </div>
    <div class="row my-3">
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">Foro</h3>
                                <span><a href="{{route('forum_index')}}" class="btn btn-sm btn-link">Acceder <i
                                            class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado a los foros creados por los usuarios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">Principal</h3>
                                <span><a href="{{route('content_index')}}" class="btn btn-sm btn-link">Acceder <i
                                            class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado al contenido de la página principal..</p>
                            </div>
                        </div>
                    </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Tickets</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Seccion de Tickets</h6>
                    <p class="card-text">En esta seccion se podran ver todas las opciones sobre los tickets.</p>
                <a href="{{route('new_ticket')}}" class="card-link">Generar ticket</a>
                <a href="{{route('list_tickets')}}" class="card-link">Lista de Tickets</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">Archivos</h3>
                                <span><a href="{{route('document_index')}}" class="btn btn-sm btn-link">Acceder <i
                                            class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado al manejo de la carga de archivos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="row my-3">
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">Usuarios</h3>
                                <span><a href="{{route('user_index')}}" class="btn btn-sm btn-link">Acceder <i
                                            class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado al manejo de los usuarios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card shadow-sm">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">Q&A</h3>
                                <span><a href="" class="btn btn-sm btn-link">Acceder <i
                                            class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado para la sección de preguntas frecuentes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> a3d3d2aed49db91a928d32eced8912eeee2bf868
