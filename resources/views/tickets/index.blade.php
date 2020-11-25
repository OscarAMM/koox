@extends('layouts.app')
@section('content')
<div class="container">
    <div class="py-3 text-center">
        <i class="fas fa-university fa-3x"></i>
        <h2>Tickets</h2>
        <p class="lead"></p>
        <div class="text-center">
            <div class="btn-group">
                <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left"
                        style="color:black;"></i> Regresar</a>
                <a href="{{route('new_ticket')}}" class="btn btn-sm btn-link"><i class="fas fa-plus-circle"
                        style="color:green;"></i> Agregar ticket</a>
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
                                    <th>Numero de tickets</th>
                                    <th>Estatus</th>
                                    <th>Nombre</th>
                                    <th>Asunto</th>
                                    <th colspan="4">Opcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ticket as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->issue}}</td>
                                    <td>





                                    <a href="{{route('data_tickets', $row->id)}}" class="btn btn-sm btn-link"><i class="fas fa-edit"
                                                    style="color:orange;"></i> Ver</a>


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
