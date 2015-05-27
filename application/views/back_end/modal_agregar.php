<!-- Modal -->

<div class="modal fade " id="mAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nombre Categoria</h4>
            </div>
            <form action="<?php base_url(); ?>addCategoria" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label ">Nombre Categoria:</label>
                        <input type="text" name="nombre" class="form-control" required="required" id="nombre" placeholder="Nombre" tabindex="1" title="Nombre">
                    </div>
                    <div class="form-group">
                        <label class="control-label ">Estado:</label>
                        <select class="form-control" name="activo" tabindex="2">
                            <option value="1">Activo</option>
                            <option value="0">Desactivado</option>                            
                        </select>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar" tabindex="3">
                    <input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancelar" tabindex="4">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
