@extends('layouts.guest')
@section('content')
@include('modal.welcome_modal')
<div class="container">
    <div class="d-flex justify-content-left">
        <img src="{{asset('images/logoSegey.png')}}" alt="logo-segey" class="img-fluid" width="250px"
            style="margin-bottom:24px; margin-top:24px;">
    </div>
    <h1 class="text-center" style="color:blue;"><i class="fas fa-globe-americas"></i> Foros</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @if($forum->count() > 0)
                        @foreach($forum as $row)
                        <li class="list-group-item">
                            <a href="{{route('forum_forum', [$row->id, $row->random_link])}}" class="stretched-link"
                                style="color:black;">
                                <h5 class="card-title">{{$row->topic}}</h5>
                            </a>
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