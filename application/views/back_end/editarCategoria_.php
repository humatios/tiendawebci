<section class="row">

    <div class="col-md-12">

        <a class="btn" href="<?php echo base_url() ?>admin/categorias">Regresar</a>

        <form class="form-horizontal" action="<?php echo base_url(); ?>admin/actualizarCategoria" method="post">
            <div class="form-group">
                <label class="control-label col-xs-3">Nombre Categoria:</label>
                <div class="col-xs-7">
                    <input type="text" name="nombre" class="form-control" value="<?php echo $valores->nombre; ?>" required="required" id="nombre" placeholder="Nombre" tabindex="1" title="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Estado:</label>
                <div class="col-xs-7">
                    <select class="form-control" name="activo" tabindex="2">
                        <option value="1" <?php if ($valores->activo == 1) echo 'selected'; ?>>Activo</option>
                        <option value="0" <?php if ($valores->activo == 0) echo 'selected'; ?> >Desactivado</option>                            
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Enviar" tabindex="3">
                    <input type="reset" class="btn btn-default" value="Limpiar" tabindex="4">
                </div>
            </div>
        </form>
    </div>
</section>

