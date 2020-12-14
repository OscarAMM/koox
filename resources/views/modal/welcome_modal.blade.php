<div class="modal fade" id="welcome_modal" tabindex="-1" aria-labelledby="welcome_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="welcome_modal_label">¡Ya casi!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Para realizar un ticket deberás inciar sesión primero. Esto servirá para poder llevar un mejor
                seguimiento de las dudas o problemas que tengas.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <a href="{{route('login')}}" class="btn btn-sm btn-primary">Iniciar sesión</a>
                <small>¿No tienes una cuenta? <a href="{{route('register')}}"> Regístrate</a></small>
            </div>
        </div>
    </div>
</div>
<!------------- FORO ---------->
<div class="modal fade" id="forum_modal" tabindex="-1" aria-labelledby="forum_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="forum_modal_label">¡Ya casi!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Para acceder al foro se debe ingresar con tu cuenta.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                <a href="{{route('login')}}" class="btn btn-sm btn-primary">Iniciar sesión</a>
                <small>¿No tienes una cuenta? <a href="{{route('register')}}"> Regístrate</a></small>
            </div>
        </div>
    </div>
</div>