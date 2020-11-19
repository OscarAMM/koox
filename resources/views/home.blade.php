@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
<<<<<<< Updated upstream
                    <h5 class="card-title">Carga de Archivos</h5>
                    
                    <p class="card-text">Documentos Cargados</p>
                    <a href="{{route('document_index')}}" class="card-link">Acceder</a>
                    </div>
=======
                    <h5 class="card-title">Tickets</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Seccion de Tickets</h6>
                    <p class="card-text">En esta seccion se podran ver todas las opciones sobre los tickets.</p>
                <a href="{{route('new_ticket')}}" class="card-link">Generar ticket</a>
                <a href="{{route('list_tickets')}}" class="card-link">Lista de Tickets</a>
                </div>
>>>>>>> Stashed changes
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <p class="card-text">Lista de usuarios</p>
                    <a href="{{route('user_index')}}" class="card-link">Acceder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
