@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="text-center card-title border-bottom">Crear foro</h3>
                    <form action="{{route('forum_post')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="topic">Tópico / Asunto</label>
                                <input type="text" name="topic" id="topic" required class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="description">Descripción</label>
                                <textarea name="description" id="description" required cols="10" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="user">Administradores disponibles</label>
                                @foreach($users as $user)
                                @if($user->hasRole('Administrador'))
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="users[]" value="{{$user->id}}" id="user-{{$user->id}}">
                                    <label class="form-check-label" for="user-{{$user->id}}">
                                        {{$user->name}}
                                    </label>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="btn-group">
                                    <a href="{{route('forum_index')}}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-alt-circle-left"></i> Regresar</a>
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-save"></i> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection