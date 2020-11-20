<div class="modal fade" id="exampleModalSubComments{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Responder comentario </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('subcomment_post', $comment->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="comment">Comentario </label>
                    <textarea name="comment" id="comment" cols="10" rows="5" class="form-control"></textarea>
                   

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Comentar</button>
                </div>
            </form>
        </div>
    </div>
</div>