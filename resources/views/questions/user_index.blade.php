@extends('layouts.app')
@section('content')
<div class="container">
    <div class="py-3 text-center">
        <i class="fas fa-university fa-3x"></i>
        <h2>Preguntas Frecuentes</h2>
        <p class="lead">Se listan las preguntas con las que mas frecuencia nos llegan junto con sus respectivas respuestas.</p>
        <div class="text-center">
            <div class="btn-group">
                <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left"
                        style="color:black;"></i> Regresar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card box shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Preguntas Frecuentes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($question as $row)
                                <tr>
                                <td>
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{$row->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                    {{$row->question}}
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapse-{{$row->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                {{$row->answer}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection