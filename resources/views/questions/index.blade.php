@extends('layouts.app')
@section('content')
<div class="container">
    <div class="py-3 text-center">
        <i class="fas fa-question-circle fa-3x"></i>
        <h1 class="font-weight-bold">Preguntas Frecuentes</h1>
        <p class="lead">Se listan las preguntas con las que mas frecuencia nos llegan junto con sus respectivas
            respuestas.</p>
        <div class="text-center">
            <div class="btn-group">
                <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left"
                        style="color:black;"></i> Regresar</a>
                <a href="{{route('questions_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus-circle"
                        style="color:green;"></i> Agregar pregunta</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card box shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Preguntas Frecuentes</th>
                                    <th>Respuestas</th>
                                    <th>Estatus</th>
                                    <th colspan="3">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($question as $row)
                                <tr>
                                    <td>{{$row->question}}</td>
                                    <td>{{$row->answer}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('questions_edit', $row->id)}}"
                                                class="btn btn-sm btn-link"><i class="fas fa-edit"
                                                    style="color:orange;"></i> Editar</a>
                                            @if($row->status == "Active")
                                            <form action="{{route('questions_status', $row->id)}}" method="post">
                                                @csrf
                                                {{method_field('PUT')}}
                                                <button type="submit" class="btn btn-sm btn-link"><i
                                                        class="fas fa-times-circle" style="color:red;"></i>
                                                    Inhabilitar</button>
                                            </form>
                                            @else
                                            <form action="{{route('questions_status', $row->id)}}" method="post">
                                                @csrf
                                                {{method_field('PUT')}}
                                                <button type="submit" class="btn btn-sm btn-link"><i
                                                        class="fas fa-check" style="color:green;"></i>
                                                    Habilitar</button>
                                            </form>
                                            @endif
                                        </div>
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