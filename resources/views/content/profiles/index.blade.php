@extends('layouts.app')
@section('content')
    @include('messages.success')
    <div class="container">
        <div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
            <h1 class="display-4">Perfiles</h1>
            <p class="lead">Se enlistan los perfiles creados, con su contenido y los archivos
                relacionados a dichos perfiles.</p>
            <div class="btn-group mb-2">
                <a href="{{ route('home') }}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left"
                        style="color:black;"></i>
                    Regresar</a>
                <a href="{{ route('profiles_create') }}" class="btn btn-sm btn-link"><i class="fas fa-plus"
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
                    @foreach ($profile as $row)
                    <tbody>
                        <td>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{$row->id}}"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                {{$row->profile_name}}
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse-{{$row->id}}" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            {{$row->profile_content}}
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
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
