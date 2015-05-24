<section class="row">

    <div class="col-md-12">

        <a class="btn" href="<?php echo base_url() ?>admin/producto">Regresar</a>

        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/actualizarProducto" method="post">
            <div class="form-group">
                <label class="control-label col-xs-3">Codigo:</label>
                <div class="col-xs-7">
                    <input type="number" name="codigo" class="form-control" value="<?php echo $valores->codigo; ?>" required="required" id="codigo" tabindex="1" title="Codigo">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Nombre:</label>
                <div class="col-xs-7">
                    <input type="text" name="nombre" class="form-control" value="<?php echo $valores->nombre; ?>" required="required" id="Nombre" tabindex="2" title="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Categoria:</label>
                <div class="col-xs-7">
                    <input type="text" name="categoria" class="form-control" value="<?php echo $valores->categoria; ?>" required="required" id="Categoria" tabindex="3" title="Categoria">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Descripcion:</label>
                <div class="col-xs-7">
                    <input type="text" name="descripcion" class="form-control" value="<?php echo $valores->descripcion; ?>" required="required" id="Descripcion" tabindex="4" title="Descripcion">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Precio:</label>
                <div class="col-xs-7">
                    <input type="number" name="precio" class="form-control" value="<?php echo $valores->precio; ?>" required="required" id="Precio" tabindex="5" title="Precio">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Oferta:</label>
                <div class="col-xs-7">
                    <input type="number" name="oferta" class="form-control" value="<?php echo $valores->oferta; ?>" required="required" id="Oferta" tabindex="6" title="Oferta">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Stock:</label>
                <div class="col-xs-7">
                    <input type="number" name="stock" class="form-control" value="<?php echo $valores->stock; ?>" required="required" id="Stock" tabindex="7" title="Stock">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Foto:</label>
                <div class="col-xs-7">
                    <input type="text" name="foto" class="form-control" value="<?php echo $valores->foto; ?>" required="required" id="Foto" tabindex="8" title="Foto">
                </div>
            </div>
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Enviar" tabindex="9">
                    <input type="reset" class="btn btn-default" value="Limpiar" tabindex="10">
                </div>
            </div>
        </form>
    </div>
</section>

