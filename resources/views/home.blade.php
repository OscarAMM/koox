@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="jumbotron text-center my-3 text-white shadow-sm" style="background-color: #F18B39 ">
        <h1 class="font-weight-bold">¡Bienvenido a Ko'ox Tsikbal {{Auth::user()->name}}! </h1>
        <p class="lead">Aquí se podrá realizar las modificaciones del sistema, así como las consultas que se tengan por
            los usuarios.</p>
            <a href="{{route('welcome')}}" class="btn btn-sm btn-primary">Regresar a la vista principal</a>
    </div>
    <div class="row my-3">
        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5 text-center">
            <div class="bg-white rounded shadow-sm py-5 px-4"><i class="fas fa-comments fa-3x" style="color: #F18B39"></i>
                <h5 class="mb-0">Foro</h5><span class="small text-uppercase text-muted">Módulo dedicado para supervisar
                    los foros creados.</span>
                    <p><a href="{{route('forum_index')}}" class="btn btn-sm btn-primary">Acceder </a></p>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-5 text-center">
            <div class="bg-white rounded shadow-sm py-5 px-4" ><i class="fas fa-clone fa-3x" style="color: #F18B39"></i>
                <h5 class="mb-0">Principal</h5><span class="small text-uppercase text-muted">
                    Módulo dedicado al contenido de la página principal.</span>
                    <p><a href="{{route('content_index')}}" class="btn btn-sm btn-primary">Acceder </a></p>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-5 text-center">
            <div class="bg-white rounded shadow-sm py-5 px-4"><i class="fas fa-file-upload fa-3x" style="color: #F18B39" ></i>
                <h5 class="mb-0">Archivos</h5><span class="small text-uppercase text-muted">
                    Módulo dedicado al manejo de la carga de archivos.</span>
                    <p><a href="{{route('document_index')}}" class="btn btn-sm btn-primary">Acceder </a></p>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-5 text-center">
            <div class="bg-white rounded shadow-sm py-5 px-4"><i class="fas fa-users fa-3x" style="color: #F18B39"></i>
                <h5 class="mb-0">Usuarios</h5><span class="small text-uppercase text-muted">Módulo dedicado al manejo de
                    los usuarios</span>
                    <p><a href="{{route('user_index')}}" class="btn btn-sm btn-primary">Acceder </a></p>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-5 text-center">
            <div class="bg-white rounded shadow-sm py-5 px-4"><i class="fas fa-question-circle fa-3x" style="color: #F18B39"></i>
                <h5 class="mb-0">
                    FAQ</h5><span class="small text-uppercase text-muted">Módulo dedicado para la sección de preguntas
                    frecuentes.</span>
                    <p><a href="{{route('questions_index')}}" class="btn btn-sm btn-primary">Acceder </a></p>
                
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-5 text-center">
            <div class="bg-white rounded shadow-sm py-5 px-4"><i class="fas fa-file fa-3x" style="color: #F18B39"></i>
                <h5 class="mb-0">Tickets</h5><span class="small text-uppercase text-muted">Módulo dedicado para la
                    sección de ticktes creados por usuarios</span>
                    <p><a href="{{route('list_tickets')}}" class="btn btn-sm btn-primary">Acceder</a></p>
            </div>
        </div>
    </div>
</div>
@endsection