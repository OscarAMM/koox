@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="text-center border-bottom"><i class="fas fa-file-alt"></i> Contenido</h1>
                        <h2 class="text-center border-bottom"><i class="fas fa-file-alt"></i> ¿Cual es tu perfil?</h2>
                        <form action="{{ route('content_store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="content_paragraph">Contenido para la sección barra de perfiles</label>
                                <p class="class-lead">Opciones de perfiles guardados</p>




                                    <div class="form-group">
                                        <label for="ticket_own">Nombre del perfil</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="">
                                    </div>



                            </div>
                            <div class="form-group">
                                <label for="content_paragraph">Contenido para el perfil</label>
                                <textarea name="first_paragraph" id="content_paragraph" cols="30" rows="10"
                                    class="form-control"></textarea>
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
