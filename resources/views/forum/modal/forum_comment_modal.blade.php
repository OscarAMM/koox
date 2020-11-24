<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realiza tu comentario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('comment_post', $forum->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="comment">Comentar este foro</label>
                    <textarea required name="comment" id="comment" cols="10" rows="5" class="form-control"></textarea>
                    <div class="input-group mb-3">
                        <div class="form-group">
                            <label for="file">Carga de archivo</label>
                            <input type="file" name="file" class="form-control-file  @error('file') is-invalid @enderror" id="file">
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small>La carga de archivo es opcional.</small>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Comentar</button>
                </div>
            </form>
        </div>
    </div>
</div>