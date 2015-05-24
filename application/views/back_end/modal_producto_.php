<!-- Modal -->

<div class="modal fade " id="mAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agregar producto</h4>
            </div>
            <form action="<?php base_url(); ?>addProducto" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label ">Codigo:</label>
                        <input type="number" name="codigo" class="form-control" required="required" id="codigo" tabindex="1" title="Codigo">
                    </div> 
                    <div class="form-group">
                        <label class="control-label ">Nombre:</label>
                        <input type="tel" name="nombre" class="form-control" required="required" id="Nombre" tabindex="2" title="Nombre">
                    </div> 
                    
                    <div class="form-group">
                        <label class="control-label ">Categoria:</label>
                        <input type="text" name="categoria" class="form-control" required="required" id="Categoria" tabindex="3" title="Categoria">
                    </div>  
                    
                    <div class="form-group">
                        <label class="control-label ">Descripcion:</label>
                        <input type="text" name="descripcion" class="form-control" required="required" id="Descripcion" tabindex="4" title="Descripcion">
                    </div>                    
                    <div class="form-group">
                        <label class="control-label ">Precio:</label>
                        <input type="number" name="precio" class="form-control" required="required" id="Precio" tabindex="5" title="Precio">
                    </div>                    
                    <div class="form-group">
                        <label class="control-label ">Oferta:</label>
                        <input type="number" name="oferta" class="form-control" required="required" id="Oferta" tabindex="6" title="Oferta">
                    </div>                    
                    <div class="form-group">
                        <label class="control-label ">Stock:</label>
                        <input type="number" name="stock" class="form-control" required="required" id="Stock" tabindex="7" title="Stock">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label ">Foto:</label>
                        <input type="text" name="foto" class="form-control" required="required" id="Foto" tabindex="8" title="Foto">
                    </div>                    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar" tabindex="9">
                    <input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancelar" tabindex="10">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->

