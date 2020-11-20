@extends('layouts.app')
@section('content')
<div class="container">

<div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
        <h1 class="display-4">Archivos</h1>
        <p class="lead">Seccion de Carga de Archivos </p>
        <div class="btn-group mb-2">
            <a href="{{route('document_index')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>
            
        </div>
    </div>
  
    
    
    <form action="{{route('document_store')}}" method="post" enctype="multipart/form-data">
      @csrf                    
        <div class="col-md-4 order-md-2 mb-4">


        
                           
        <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted border-bottom">ADMINISTRADOR</span>
        </h4>
       
                 
            
            
            <label for="comment">Titulo</label>
                    <textarea name="title_document" id="title_document" cols="6" rows="1" class="form-control"></textarea>
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

