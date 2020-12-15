@extends('layouts.guest')
@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="class col-md-6">
            {{--Aqui comienza el div inicial donde ira el form para hacer un neuvo
                ticket--}}
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-icon text-center">
                        <h4><i class="fas fa-ticket-alt"></i> Ticket</h4>
                    </div>
                    {{--Aqui abrimos el form--}}
                    <form action="{{ route('tickets_store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="ticket_own">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ auth::user()->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="ticket_name">Asunto</label>
                            <input type="text" name="issue" id="issue" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="decription">Descripción</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="form-control"></textarea>
                        </div>
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection