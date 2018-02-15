<form method="POST" v-on:submit.prevent="createKeep"><!--hacemos el llamado del metodo create y el prevent para que no se refresque la navegacion-->
    <div class="modal fade" id="create"><!-- fade es un efecto de un leve deslizamiento-->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span><!--Entidad html que hace que de forma visual aparezca una pueque;a x-->
                    </button>
                    <h4>Nueva tarea</h4>
                </div>
                <div class="modal-body">
                    <label for="keep">Crear Tarea</label>
                    <input type="text" name="keep" class="form-control" v-model="newKeep">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span><!--mensaje de error, si se deja un espacio vacio y se presiona guardar debe salir un mensaje de error-->
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </div>
        </div>
    </div>
</form>
