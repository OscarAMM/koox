@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-left border-bottom font-weight-bold">Usuarios registrados</h2>
    <div class="text-right">
        <div class="btn-group mb-2">
            <a href="#" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>
            <a href="{{route('user_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus"
                    style="color:green;"></i> Agregar usuario</a>
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
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-sm btn-link dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Opciones
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('user_edit', $row->id)}}"><i class="fas fa-edit" style="color:orange;"></i> Editar</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-check" style="color:green;"></i> Habilitar</a>
                                    <a class="dropdown-item" href="#"><i class="far fa-times-circle" style="color:red;"></i> Inhabilitar</a>
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
@endsection