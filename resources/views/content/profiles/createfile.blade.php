@extends('layouts.app')
@section('content')
<div class="container">

    <div class="pricing-header  px-3  pb-md-4 mx-auto text-center">

        <h1 class="display-4">Archivos del perfil</h1>
        <h1 class="display-5">{{ $profile->profile_name }}</h1>


        <div class="btn-group mb-2">
            <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>

        </div>
    </div>

    <div class="d-flex justify-content-center mt-5 h-100">
        <div class="card p-5">
            <form action="{{route('file_store', $profile->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                </h4>
                <div class="input-group mb-3">
                    <div class="form-group">
                        <input type="file" name="file[]" id="file" multiple>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Subir Archivos</button>
                </div>
                @if(Session::has('success_message'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success_message') !!}</em></div>
                @elseif(Session::has('fail_message'))
                <div class="alert alert-danger"><span class="glyphicon glyphicon-ok"></span><em> {!! session('fail_message') !!}</em></div>

                @endif
            </form>


        </div>
    </div>
    <h1 class="display-4"></h1>
    <div class="container">

        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ARCHIVO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                    <tr>
                        <td> <a href="{{route('file_download', $file->id)}}">{{$file->fileName}}</a></td>
                        <td>
                            <div class="btn-group">
                                <form action="{{route('file_delete', $file->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-link"><i class="far fa-times-circle" style="color:red;"></i>
                                        Eliminar</button>
                                </form>
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