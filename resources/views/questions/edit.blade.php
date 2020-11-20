@extends('layouts.app')
@section('content')
@include('messages.error')
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="card box shadow">
                <div class="card-body">
                    <div class="py-2 text-center">
                        <i class="fas fa-university fa-2x"></i>
                        <h4 class="text-center">Programa</h4>
                    </div>
                    <form action="{{route('questions_update', $question->id)}}" method="post">
                    @csrf
                    {{method_field('PUT')}}
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <label for="question">Pregunta</label>
                                <input type="text" name="question" id="question"
                                    value="{{$question->question}}" class="form-control" autocomplete="off">
                            </div>
                        </div>

                        <div class="row text-center mt-2">
                            <div class="col-lg-12">
                                <label for="answer">Respuesta</label>
                                <input type="text" name="answer" id="answer"
                                    value="{{$question->answer}}" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <div class="btn-group mt-3">
                                <a href="{{route('questions_index')}}" class="btn btn-sm btn-secondary">Regresar</a>
                                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection