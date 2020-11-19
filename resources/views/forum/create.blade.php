@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center border-bottom">Crear tópico</h4>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="topic">Asunto</label>
                                <input type="text" name="topic" id="topic" autocomplete="off" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="created_by">Creador</label>
                                <input type="text" name="created_by" id="created_by" autocomplete="off"
                                    value="{{Auth::user()->name}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="description">Descripción del tópico/problema</label>
                                <textarea name="description" id="description" cols="10" rows="5"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection