@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="class col-md-12">

                {{--Aqui comienza el titulo--}}
                <div class="jumbotron text-center">
                    <h2 class="class font-weight-bold card-title text-center">Crear nuevo ticket</h2>
                    <p class="class-lead">Ingresar los datos correctamente para generar nuevo ticket</p>
                </div>
                        {{--Aqui termina el titulo--}}
                         {{--Aqui comienza el div inicial donde ira el form para hacer un neuvo ticket--}}

<div class="card shadow-sm">
<div class="class card-body">
{{--Aqui abrimos el form--}}
<form action="" method="POST">
    <div class="row">
        @csrf
        <div class="col-md-6">
            <label for="ticket_own" >Nombre</label>
            <input type="text" name="ticket_own" id="ticket_own" class="form-control" value="{{auth::user()->name}}" readonly>
        </div>{{--<div class="col-md-6">--}}

        <div class="col-md-12">
            <label for="ticket_name" >Asunto</label>
            <input type="text" name="ticket_name" id="ticket_name" class="form-control">
        </div>{{--<div class="col-md-6">--}}

        <div class="col-md-12">
            <label for="decription">Descripción</label>
            <textarea name="ticket_description" id="ticket_description" cols="30" rows="10"
                class="form-control"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="form-group">
                <label for="file">Carga de archivo</label>
                <input type="file" name="file"
                    class="form-control-file  @error('file') is-invalid @enderror" id="file">
                @error('file')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small>La carga de archivo es opcional.</small>
            </div>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>

        {{--Pueden utilizar un href o con js cualquiera esto es un comentario --}}
    </div>

</form>{{--Aqui cerramos el form--}}
</div>{{--<div class="class card-body">--}}

</div>{{--<div class="card shadow-sm">--}}

            </div>{{--div de <div class="class col-md-12">--}}
        </div>{{-- <div class="row justify-content-center">--}}
    </div>{{--  <div class="container">--}}


@endsection

