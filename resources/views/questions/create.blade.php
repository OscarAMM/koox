@extends('layouts.app')
@section('content')
@include('messages.error')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="card box shadow">
                <div class="card-body">
                    <div class="py-2 text-center">
                        <h3><i class="fas fa-question-circle"></i> FAQ</h3>
                    </div>
                    <form action="{{route('questions_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="question">Pregunta frecuente</label>
                                <input type="text" name="question" id="question" class="form-control"
                                    autocomplete="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <label for="answer">Respuesta</label>
                                <textarea name="answer" id="answer" cols="20" rows="5" class="form-control"
                                    autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12">
                                <label for="status">Estatus</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">seleccione un estatus</option>
                                    <option value="Active">Activo</option>
                                    <option value="Inactive">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file">Cargar archivo</label>
                            <input type="file" name="file" id="file" class="form-control-file">
                        </div>
                        <div class="text-center">
                            <div class="btn-group mt-3">
                                <a href="{{route('questions_index')}}"
                                    class="btn btn-sm btn-outline-secondary">Regresar</a>
                                <button type="submit" class="btn btn-sm btn-outline-success">Guardar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection