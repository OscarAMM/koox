@extends('layouts.app')
@section('content')
@include('forum.modal.forum_comment_modal')
<div class="container">
    <div class="py-5 jumbotron text-center">
        <i class="fas fa-comments fa-3x"></i>
        <h2>{{$forum->topic}}</h2>
        <p class="text">{{$forum->description}}</p>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted border-bottom">Comenta</span>
            </h4>
            <div class="btn-group">
                <a href="{{route('forum_index')}}" class="btn btn-sm btn-primary">Regresar <i class="fas fa-arrow-circle-left"></i></a>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Comentar <i class="fas fa-comment"></i>
                </button>
            </div>
            <h4 class="d-flex justify-content-between align-items-center mb-3 mt-3">
                <span class="text-muted border-bottom">Administrador encargado</span>
            </h4>
            <ul class="list-group mb-3">
                @foreach($forum->users as $user )
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{$user->name}}</h6>
                        <small class="text-muted">Contacto: {{$user->email}}</small>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted border-bottom">Comentarios</span>
            </h4>
            @if($comments->count() > 0)
            @foreach($comments as $comment)
            @include('forum.modal.forum_subcomment_modal')
            <div class="card mt-2">
                <div class="card-body">
                    <form action="{{route('comment_delete', $comment->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger float-right">X</button>
                    </form>
                    <p class="title border-bottom">{{$comment->user->name}}
                    </p>
                    <p class="card-text">{{$comment->comment}}</p>

                    <small class="text-muted">Contacto: {{$comment->user->email}} - Fecha de posteo:
                        {{$comment->post_date}} -
                        Posted {{$comment->created_at->diffForHumans()}}</small>
                    <div>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalSubComments{{$comment->id}}">
                            Comentar <i class="fas fa-comment"></i>
                        </button>
                    </div>

                    @foreach($subcomments as $subcomment )
                    <div>
                        @if($comment->id == $subcomment->comment_id )
                        <div class="card-body">
                            <div>
                                <div class="d-flex flex-column w-100" data-region="replies-container">
                                    <div class="div">
                                        <form action="{{route('subcomment_delete', $subcomment->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger float-right">X</button>
                                        </form>
                                        <p class="title border-bottom">{{$subcomment->user->name}}</p>
                                        <p class="card-text"> {{$subcomment->subcomment}}</p>
                                        <small class="text-muted">Contacto: {{$subcomment->user->email}} - Fecha de posteo:
                                            {{$subcomment->post_date}} -
                                            Posted {{$subcomment->created_at->diffForHumans()}}</small>
                                    </div>
                                    <div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach

                </div>

            </div>
            @endforeach
            @else
            <div class="card">
                <div class="card-body">
                    <p class="title border-bottom">Sistema</p>
                    <p class="card-text">No se ha registrador ningún comentario. Se el primero en realizarlo.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Contacto: n/a - fecha posteo: n/a </small>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection