@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="text-center border-bottom"><i class="fas fa-file-alt"></i> Contenido</h1>
                        <form action="{{ route('content_store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="content_paragraph">Contenido de la primera sección</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Seleccionar opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" id="parents" name="parents">Soy madre/padre de
                                            familia/tutor</a>
                                        <a class="dropdown-item" href="#" id="teacher" name="teacher">Soy docente</a>
                                        <a class="dropdown-item" href="#" id="director" name="director">Soy director(a)</a>
                                        <a class="dropdown-item" href="#" id="supervisor" name="supeprvisor">Soy
                                            supervisor(a)</a></a>
                                        <a class="dropdown-item" href="#" id="enlace" name="enlace">Soy enlace</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content_paragraph">Contenido de la opcion escogida</label>
                                <textarea name="first_paragraph" id="content_paragraph" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="content_paragraph">Opcion de archivos para la opcion escogida (link)</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Seleccionar opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" id="" name="">Soy madre/padre de
                                            familia/tutor</a>
                                        <a class="dropdown-item" href="#" id="" name="">Soy docente</a>
                                        <a class="dropdown-item" href="#" id="" name="">Soy director(a)</a>
                                        <a class="dropdown-item" href="#" id="" name="">Soy
                                            supervisor(a)</a></a>
                                        <a class="dropdown-item" href="#" id="" name="">Soy enlace</a>
                                    </div>
                                </div>
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary my-3"><i class="fas fa-save"></i>
                                    Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('content_paragraph');

    </script>
    <script>
        CKEDITOR.replace('objective_paragraph');

    </script>
@endsection
