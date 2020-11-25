@extends('layouts.app')
@section('content')
@include('messages.single_error')
    <div class="container">
        <div class="row justify-content-center">
            <div class="class col-md-12">

                {{--Aqui comienza el titulo--}}
                <div class="jumbotron text-center">
                    <h2 class="class font-weight-bold card-title text-center">Visualisar datos ticket</h2>
                    <p class="class-lead">Elegir la opcion deseada para este ticket</p>
                </div>
                {{--Aqui termina el titulo--}}
                {{--Aqui comienza el div inicial donde ira el form para hacer un neuvo
                ticket--}}

                <div class="card shadow-sm">
                    <div class="class card-body">
                        {{--Aqui abrimos el form--}}

                        <div class="{{ route('options_tickets', $ticket->id) }}">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <label for="ticket_own">Nombre</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ auth::user()->name }}" readonly>
                                </div>{{--<div class="col-md-6">
                                    --}}

                                    <div class="col-md-12">
                                        <label for="ticket_name">Asunto</label>
                                        <input type="text" name="issue" id="issue" class="form-control"
                                            value="{{ $ticket->issue }}" readonly>
                                    </div>{{--<div class="col-md-6">
                                        --}}

                                        <div class="col-md-12">
                                            <label for="decription">Descripción</label>
                                            <textarea name="description" id="description" cols="30" rows="10"
                                                class="form-control" value="{{ $ticket->description }}"
                                                readonly>{{ $ticket->description }}</textarea>
                                        </div>

                                        <div class="btn-group" role="group" aria-label="Basic example">


                                            <a href="{{ route('tickets_edit', $ticket->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <a href="" class="btn btn-warning">Cancelar</a>
                                            <a href="" class="btn btn-danger "> Cerrar</a>



                                        </div>








                                    </div>{{--<div class="class card-body">
                                        --}}

                                    </div>{{--<div class="card shadow-sm">
                                        --}}

                                    </div>{{--div de <div class="class col-md-12">
                                        --}}
                                    </div>{{-- <div class="row justify-content-center">
                                        --}}
                                    </div>{{-- <div class="container">
                                        --}}


                                    @endsection
