@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card box shadow mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('images/login.jpg')}}" class="img-fluid" alt="login_img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title border-bottom">Iniciar sesión</h5>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="email">Correo</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="password">Contraseña</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-primary mt-2">Iniciar sesión</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection