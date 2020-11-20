@extends('layouts.app')
@section('content')
<div class="container">
    <div class="jumbotron shadow-sm text-center" style="background-color:white;">
        <h1 class=" text-monospace"><i class="fas fa-globe-americas"></i> Foro</h1>
        <p class="lead">Foro</p>
        <div class="text-center">
            <div class="btn-group">
                <a href="{{route('home')}}" class="btn btn-sm btn-link"><i class="fas fa-arrow-alt-circle-left"
                        style="color:black;"></i> Regresar</a>
                <a href="{{route('forum_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus-circle"
                        style="color:green;"></i> Crear tópico</a>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Últimos foros</h6>
        @foreach($forum as $row)
        <div class="media text-muted pt-3">
            <i class="fas fa-id-card-alt fa-2x mt-1 mr-2"></i>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark"><a href="{{route('forum_forum', [$row->id, $row->random_link])}}">{{$row->topic}} - {{$row->creator_name}}</a></strong>
                {{$row->description}}
            </p>
            <div class="text-muted">
                <p class="small">{{$row->created_at->diffForHumans()}} | {{$row->status}}</p>
            </div>
        </div>
        @endforeach
        <small class="d-block text-right mt-3">
            <a href="{{route('forum_all')}}">Todos los foros</a>
        </small>
    </div>
</div>
@endsection