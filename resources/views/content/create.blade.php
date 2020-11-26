@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="text-center border-bottom"><i class="fas fa-file-alt"></i> Contenido</h1>
                    <form action="{{route('content_store')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label for="content_paragraph">Contenido de la primera sección</label>
                                <textarea name="first_paragraph" id="content_paragraph" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="sub_title">Sub-título segunda sección</label>
                                <input type="text" name="sub_title" id="sub_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="objective_paragraph">Segunda sección</label>
                                <textarea name="objective_paragraph" id="objective_paragraph" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>

                        <button type="submit" class="btn btn-sm btn-primary my-3"><i class="fas fa-save"></i> Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
CKEDITOR.replace('content_paragraph');
</script>
<script>
CKEDITOR.replace('objective_paragraph');
</script>
@endsection
