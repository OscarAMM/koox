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
                                <span><a href="{{route('document_index')}}" class="btn btn-sm btn-link">Acceder
                                        <i class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado al manejo de la carga de
                                    archivos.</p>
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
                                <span><a href="{{route('user_index')}}" class="btn btn-sm btn-link">Acceder
                                        <i class="fas fa-external-link-square-alt"></i></a></span>
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
                                <span><a href="{{route('questions_index')}}" class="btn btn-sm btn-link">Acceder <i
                                            class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado para la sección de preguntas
                                    frecuentes.</p>
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
                                <h3 class="danger">Tickets</h3>
                                <span><a href="{{route('new_ticket')}}" class="btn btn-sm btn-link">Generar ticket<i
                                            class="fas fa-external-link-square-alt"></i></a></span>
                                <span><a href="{{route('list_tickets')}}" class="btn btn-sm btn-link">Lista de tickets
                                        <i class="fas fa-external-link-square-alt"></i></a></span>
                            </div>
                            <div class="align-self-center">
                                <p class="small text-muted">Módulo dedicado para la sección de ticktes creados por
                                    usuarios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection