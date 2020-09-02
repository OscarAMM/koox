@extends('layouts.app')
@section('content')
@include('messages.success')
<div class="container">
    <div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
        <h1 class="display-4">Usuarios</h1>
        <p class="lead">Se listan todos los usuarios registrados en el sistema. Se muestra el perfil que tiene dentro
            del sistema. También se puede hacer modificaciones en su perfil.</p>
        <div class="btn-group mb-2">
            <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
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
                        <th colspan="3">Opciones</th>
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
                            <div class="btn-group">
                                <a class="btn btn-sm btn-link" href="{{route('user_edit', $row->id)}}"><i
                                        class="fas fa-edit" style="color:orange;"></i> Editar</a>

                                @if($row->status == "enable")
                                <form action="{{route('user_status', $row->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-link"><i class="far fa-times-circle"
                                            style="color:red;"></i>
                                        Inhabilitar</button>

                                </form>
                                @else
                                <form action="{{route('user_status', $row->id)}}" method="post">
                                @csrf
                                    <button type="submit" class="btn btn-sm btn-link"><i class="fas fa-check"
                                            style="color:green;"></i> Habilitar</button>
                                </form>
                                @endif
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