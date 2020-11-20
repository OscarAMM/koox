@extends('layouts.app')
@section('content')
<div class="container">
<div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
        <h1 class="display-4">Archivos</h1>
        <p class="lead">Se listan todos los archivos cargados en el sistema. </p>

        @if(Auth::user()-> hasRole('Administrador'))

        
        <div class="btn-group mb-2">
            <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>
            <a href="{{route('document_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus"
                    style="color:green;"></i> Subir Documento</a>
        </div>
    </div>
    
    <form action="{{route('document_store')}}" method="post" enctype="multipart/form-data">
      @csrf                    
        <div class="col-md-4 order-md-2 mb-4">


      
                 
                            
        </div>
    <div class="col-md-12 order-md-2">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted border-bottom">Documentos</span>
            </h4>
            @if($documents->count() > 0)
            @foreach($documents as $document)

            <div class="card mt-2">
                <div class="card-body">
                    <form action="{{route('document_delete', $document->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">X</button>
                    </form>
                   
                    <p class="card-text">{{$document->title_document}}</p>
                    @foreach($document->files as $file)
                    <p>Archivo: <a href="{{route('download_file', $file->id)}}">{{$file->name}}</a></p>
                    @endforeach
                    
                </div>
            </div>
            @endforeach
            @else
            <div class="card">
                <div class="card-body">
                    <p class="title border-bottom">Sistema</p>
                    <p class="card-text">No se ha registrador ningún documento.</p>
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
            @endif
    </div>
</div>
@endsection
        
        @elseif(Auth::user()-> hasRole('Usuario'))

        
        <div class="btn-group mb-2">
            <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>
            
        </div>
    </div>
    
    <form action="{{route('document_store')}}" method="post" enctype="multipart/form-data">
      @csrf                    
        <div class="col-md-4 order-md-2 mb-4">


      
                 
                            
        </div>
    <div class="col-md-12 order-md-2">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted border-bottom">Documentos</span>
            </h4>
            @if($documents->count() > 0)
            @foreach($documents as $document)

            <div class="card mt-2">
                <div class="card-body">
                    
                   
                    <p class="card-text">{{$document->title_document}}</p>
                    @foreach($document->files as $file)
                    <p>Archivo: <a href="{{route('download_file', $file->id)}}">{{$file->name}}</a></p>
                    @endforeach
                    
                </div>
            </div>
            @endforeach
            @else
            <div class="card">
                <div class="card-body">
                    <p class="title border-bottom">Sistema</p>
                    <p class="card-text">No se ha registrador ningún documento.</p>
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
            @endif
    </div>
</div>
@endsection
       
        @endif



