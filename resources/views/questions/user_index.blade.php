@extends('layouts.guest')
@section('content')
<div class="container">
    <div class="d-flex justify-content-left">
        <img src="{{asset('images/logoSegey.png')}}" alt="logo-segey" class="img-fluid" width="350px"
            style="margin-bottom:24px; margin-top:24px;">
    </div>
    <div class="py-3 text-center">
        <h2 class="font-weight-bold">Preguntas Frecuentes</h2>
        <p class="lead">Esta sección contiene las dudas más frecuentes. Si tiene una duda que no se encuentra en este
            sitio, por favor realice un <a href="{{route('new_ticket')}}">Ticket</a> con su duda y en la brevedad
            posible se le dará respuesta.
        </p>
        <div class="text-center">
            <div class="btn-group">
                <a href="{{route('welcome')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left"
                        style="color:black;"></i> Regresar a página de inicio</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    @foreach($question as $row)
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse"
                                        data-target="#collapse-{{$row->id}}" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        {{$row->question}}
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse-{{$row->id}}" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    {{$row->answer}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection