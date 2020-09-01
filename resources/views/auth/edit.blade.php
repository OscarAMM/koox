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
                    <form action="{{route('user_update', $user->id)}}" method="POST">
                        @csrf
                        {!!method_field('PUT')!!}
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" value="{{$user->name}}" id="name" class="form-control"
                                    required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" value="{{$user->email}}"
                                    class="form-control" required autocomplete="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="profile">Perfil</label>
                                <select name="profile" id="profile" class="form-control">
                                    @foreach($user->getRoleNames() as $profile_name)
                                    <option value="">{{$profile_name}}</option>
                                    @endforeach
                                    <option value="">-----------------</option>
                                    @foreach($profile as $row)
                                    <option value="{{$row->name}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="btn-group">
                            <a href="{{route('user_index')}}" class="btn btn-sm btn-secondary mt-2">Regresar</a>
                            <button type="submit" class="btn btn-sm btn-primary mt-2">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection