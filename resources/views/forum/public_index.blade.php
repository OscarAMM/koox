@extends('layouts.guest')
@section('content')
@include('modal.welcome_modal')
<div class="container">
    <div class="jumbotron shadow-sm" style="background-color:white;">
        <h1 class="text-center"><i class="fas fa-globe-americas"></i> Foros</h1>
        <p class="lead text-center text-muted">Se listan todos los foros creados</p>
        <div class="text-center">
            <div class="btn-group">
                @if(Auth::check())
                <a href="{{route('forum_create')}}" class="btn btn-sm btn-link"><i class="fas fa-plus-circle"
                        style="color:green;"></i> Crear foros</a>
                @else
                <a href="#" class="btn btn-sm btn-link" data-toggle="modal" data-target="#forum_modal"><i
                        class="fas fa-plus-circle" style="color:green;"></i> Crear foros</a>
                @endif
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @if($forum->count() > 0)
                        @foreach($forum as $row)
                        <li class="list-group-item">
                            @if(Auth::check())
                            <a href="{{route('forum_forum', [$row->id, $row->random_link])}}" class="stretched-link"
                                style="color:black;">
                                <h5 class="card-title">{{$row->topic}}</h5>
                            </a>
                            @else

                            @endif
                            <p class="card-text text-muted">{{$row->description}}</p>
                            <small class="small">{{$row->creator_name}} -
                                {{$row->updated_at->diffForHumans()}}</small>
                        </li>
                        @endforeach
                        @else
                        <li class="list-group-item">
                            <h5 class="card-title">No se han creado ningún foro. <i class="fas fa-search"></i></h5>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection