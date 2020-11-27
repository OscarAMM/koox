@extends('layouts.app')
@section('content')
@include('messages.success')
<div class="container">
    <div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
        <h1 class="display-4">Perfiles</h1>
        <p class="lead">Se enlistan los perfiles creados, con su contenido y los archivos 
        relacionados a dichos perfiles.</p>
        <div class="btn-group mb-2">
            <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>
            <a href="{{route('profiles_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus"
                    style="color:green;"></i> Agregar perfil</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Perfiles creados</th>
                    </tr>
        </thead>
        <tbody>
            <td>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Soy madre/padre de familia/tutor
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                            Mantienen comunicación con la o él docente de su hija o hijo y trabajan 
                            en conjunto con las autoridades educativas para promover la colaboración 
                            entre las y los integrantes de la escuela. Así mismo, son fuentes de apoyo 
                            tanto en el proceso educativo como en el ámbito emocional de su hija o hijo.
                            </div>
                            <div class="pricing-header  px-3  pb-md-2 mx-auto text-center">
                                <div class="btn-group mb-2">
                                    <p><a href="" class="btn btn-sm btn-primary">Carga de archivos</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tbody>
        </table>
        </div>
    </div>
</div>
@endsection