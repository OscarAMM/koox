@extends('layouts.app')
@section('content')
@include('messages.error')
@include('messages.info')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center border-bottom">Registrar usuario</h3>
                    <form action="{{route('user_store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control"
                                    required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" required
                                    autocomplete="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" required
                                    autocomplete="new-password" class="form-control">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="confirm_password">Confirmar contraseña</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required
                                    autocomplete="new-password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="profile">Perfil</label>
                                <select name="profile" id="profile" class="form-control">
                                    <option value="">Seleccione un perfil</option>
                                    @foreach($profile as $row)
                                    <option value="{{$row->name}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary mt-2">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection