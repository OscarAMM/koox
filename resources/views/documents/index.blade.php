@extends('layouts.app')
@section('content')
<div class="container">
    
    <form action="{{route('document_store')}}" method="post" enctype="multipart/form-data">
      @csrf                    
        <div class="col-md-4 order-md-2 mb-4">
                 
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted border-bottom">Agregar Archivos</span>
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

                 
        </div>
    <div class="col-md-8 order-md-2">
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

