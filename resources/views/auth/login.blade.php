@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card box shadow mb-3" style="height:500px;">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h2 class="card-title text-center">Iniciar sesión</h2>
                            <div class="text-center">
                                <img src="{{asset('images/hex7.jpg')}}" class="img-fluid rounded mx-auto d-blockx"
                                    alt="ko'ox tskibal">
                            </div>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="row d-flex justify-content-center my-3">
                                    <div class="col-md-8">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Correo">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row d-flex justify-content-center my-3">
                                    <div class="col-md-8">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Contraseña" data-eye>
                                    </div>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-8">
                                        <div class="text-center">
                                            <a href="{{route('password.request')}}" class="btn btn-sm btn-link">¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-sm btn-primary mt-2">Iniciar
                                        sesión</button>
                                </div>
                            </form>
                            <div class="border-bottom my-3">
                            </div>
                            <div class="text-center small">
                                <p class="text-muted">¿Aún no tienes una cuenta?</p>
                                <a href="{{route('register')}}" class="btn btn-sm btn-link">Regístrate aquí</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection