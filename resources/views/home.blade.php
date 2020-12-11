@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="jumbotron text-center my-3 text-dark shadow-sm">
        <img src="{{asset('images/logo_144.png')}}" alt="" width="64" class="img-fluid">
        <h1 class="font-weight-bold">¡Bienvenido a Ko'ox Tsikbal {{Auth::user()->name}}! </h1>
        <p class="lead">Aquí se podrá realizar las modificaciones del sistema, así como las consultas que se tengan por
            los usuarios.</p>
        <a href="{{route('welcome')}}" class="btn btn-sm btn-primary">Regresar a la vista principal</a>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title" style="color:red;"> <i class="fas fa-comments"></i> Foro</h5>
                    <p class="card-text">
                        Módulo dedicado para la supervisión de los foros creados.
                    </p>
                    <a href="{{route('forum_index')}}" class="btn btn-outline-success btn-sm">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title" style="color:green;"><i class="fas fa-clone"></i> Principal</h5>
                    <p class="card-text">
                        Módulo dedicado al contenido de la página principal.
                    </p>
                    <a href="{{route('content_index')}}" class="btn btn-outline-success btn-sm">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title" style="color:blue;"><i class="fas fa-file-upload"></i> Archivos</h5>
                    <p class="card-text">
                        Módulo dedicado al manejo de la carga de archivos.
                    </p>
                    <a href="{{route('document_index')}}" class="btn btn-outline-success btn-sm">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title" style="color:skyblue;"><i class="fas fa-users"></i> Usuarios</h5>
                    <p class="card-text">
                        Módulo dedicado al manejo de usuarios con acceso al sistema y sus funciones.
                    </p>
                    <a href="{{route('user_index')}}" class="btn btn-outline-success btn-sm">Acceder</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title" style="color: orange;"> <i class="fas fa-question-circle"></i> FAQ</h5>
                    <p class="card-text">
                        Módulo dedicado a las preguntas más frecuntes 
                    </p>
                    <a href="{{route('questions_index')}}" class="btn btn-outline-success btn-sm">Acceder</a>
                </div> 
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title" style="color: darkred;"><i class="fas fa-ticket-alt"></i> Ticktes</h5>
                    <p class="card-text">
                        Módulo dedicado al contenido de la página principal.
                    </p>
                    <a href="{{route('list_tickets')}}" class="btn btn-outline-success btn-sm">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title" style="color:purple;"><i class="fas fa-user-tie"></i> Perfiles</h5>
                    <p class="card-text">
                        Módulo dedicado al contenido de la página principal.
                    </p>
                    <a href="{{route('profiles_index')}}" class="btn btn-outline-success btn-sm">Acceder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection