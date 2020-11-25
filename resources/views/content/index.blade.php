@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center mt-3">
        <h2 class="text-center font-weight-bold">Contenido de la página principal</h2>
        <p class="text-center font-italic">En esta sección se hace la administración de contenido de la página principal en
            donde se podrá establecer los datos del contenido principal, así como el objetivo. También la sección de los
            perfiles junto con la carga de archivos.</p>
            <p class="small text-center">Se establece mediante una plantilla.</p>
        @if(count($contents) > 0)
        @else
        <p class="text-center"><a href="{{route('content_create')}}" class="btn btn-sm btn-outline-primary">Añadir
                contenido</a></p>
        @endif
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2>Contenido de la página principal</h2>
                    <div class="responsive-table">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Primer párrafo</th>
                                    <th>Objetivo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contents as $content)
                                <tr>
                                    <td>{!!$content->first_paragraph!!}</td>
                                    <td>{!!$content->objective_paragraph!!}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning mt-3"><i class="fas fa-edit"></i> Editar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection