@extends('layouts.app')
@section('content')
@include('messages.error')
@include('messages.info')
@include('messages.success')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center">Edición de perfil</h3>
                    <form action="{{route('user_public_update', $user->id)}}" method="POST">
                        @csrf
                        {!!method_field('PUT')!!}
                        <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right" for="name">Nombre</label>
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{$user->name}}" id="name" class="form-control"
                                    required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right" for="email">Correo</label>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" value="{{$user->email}}"
                                    class="form-control" required autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>¡Zona de peligro!</strong> Podrás modificar tu contraseña en esta sección. Si se deja en blanco, se mantendrá la contraseña actual.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                     autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="btn-group text-right">
                            <a href="{{route('user_profile', $user->id)}}"
                                class="btn btn-sm btn-outline-secondary mt-2">Regresar</a>
                            <button type="submit" class="btn btn-sm btn-outline-primary mt-2">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection