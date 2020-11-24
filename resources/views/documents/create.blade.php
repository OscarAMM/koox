@extends('layouts.app')
@section('content')
<div class="container">

<div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
        
        <h1 class="display-4">Administrador</h1>
        <p class="lead">Seccion de Carga de Archivos </p>
        <div class="btn-group mb-2">
            <a href="{{route('document_index')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>
            
        </div>
    </div>
     
    <div class="d-flex justify-content-center mt-5 h-100">
    <div class="card p-5">
    <form action="{{route('document_store')}}" method="post" enctype="multipart/form-data">
      @csrf                    
             

        <!--<div class="d-flex align-items-center align-self-center card p-3 text-center cookies">    -->               
        
               
        </h4>
            
            
            <label for="comment">Titulo</label>
                    <textarea name="title_document" id="title_document" cols="8" rows="1" class="form-control"></textarea>
              <div class="input-group mb-3">
                        <div class="form-group">
                            <label for="file">Carga de archivo</label>
                            <input type="file" name="file"
                                class="form-control-file  @error('file') is-invalid @enderror" id="file">
                                @error('title_document')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            
                        </div>
                </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Subir Archivo</button>
            </div>
                </form>
                @if(Session::has('flash_message'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                @endif

        
   
</div>
@endsection

