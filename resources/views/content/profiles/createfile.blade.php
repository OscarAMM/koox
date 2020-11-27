@extends('layouts.app')
@section('content')
<div class="container">

<div class="pricing-header  px-3  pb-md-4 mx-auto text-center">
        
        <h1 class="display-4">Seccion Archivos de Perfil</h1>
        
        <div class="btn-group mb-2">
            <a href="" class="btn btn-sm btn-link"><i class="fas fa-arrow-circle-left" style="color:black;"></i>
                Regresar</a>
            
        </div>
    </div>
     
    <div class="d-flex justify-content-center mt-5 h-100">
    <div class="card p-5">
    <form action="{{route('file_store')}}" method="post" enctype="multipart/form-data">
      @csrf                    
             

        <!--<div class="d-flex align-items-center align-self-center card p-3 text-center cookies">    -->               
        
               
        </h4>
            
            
            
              <div class="input-group mb-3">
                        <div class="form-group">
                            
                            <input type="file" name="files[]" multiple>
                               
                        </div>
                </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Subir Archivos</button>
            </div>
                </form>
                       
   
</div>
@endsection

