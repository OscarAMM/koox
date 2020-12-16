@extends('layouts.guest')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h1 class="text-center">¡Gracias!</h1>
                    <p class="card-text">Se ha enviado con éxito su ticket. Dentro de poco un administrador se pondrá en contacto con usted.</p>
                    <a href="{{route('welcome')}}" class="btn btn-sm btn-primary">Regresar al sitio principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection