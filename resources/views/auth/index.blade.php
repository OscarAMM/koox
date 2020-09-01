@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-left border-bottom font-weight-bold">Usuarios registrados</h2>
    <div class="text-right">
        <div class="btn-group mb-2">
        <a href="#" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i> Regresar</a>
            <a href="{{route('user_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus" style="color:green;"></i> Agregar usuario</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Perfil</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}} </td>
                        <td>{{$row->email}} </td>
                        @foreach($row->getRoleNames() as $row_name)
                        <td>{{$row_name}}</td>
                        @endforeach
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection