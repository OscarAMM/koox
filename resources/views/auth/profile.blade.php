@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="text-center"><i class="fas fa-user-tie fa-3x"></i></div>
                    <h2 class="text-center font-weight-bold">{{$user->name}}</h2>
                    @foreach($profiles as $profile)
                    <p class="card-subtitle text-muted text-center">{{$profile}}</p>
                    @endforeach
                    <ul class="list-group">
                        <li class="list-group-item">Nombre: {{$user->name}}</li>
                        <li class="list-group-item">Correo: {{$user->email}}</li>
                        <li class="list-group-item">Fecha de registro: {{$user->created_at}}</li>
                        <li class="list-group-item">Fecha del último cambio: {{$user->updated_at}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection