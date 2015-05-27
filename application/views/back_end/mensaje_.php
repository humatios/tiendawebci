<section class="row">
    <div class="col-md-12">
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered" >
                <thead>                    
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Asunto</th>
                        <th class="text-center">Mensaje</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php foreach ($valores->result() as $valor): ?>
                        <tr>
                            <td><?php echo $valor->id; ?></td>
                            <td><?php echo $valor->nombre; ?></td>
                            <td><?php echo $valor->email; ?></td>
                            <td><?php echo $valor->asunto; ?></td>
                            <td><?php echo $valor->mensaje; ?></td>
                            
                        </tr>

                    <!-- Modal -->

                    <div class="modal fade " id="m<?php echo $valor->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Eliminar Categoria</h4>
                                </div>
                                <form action="<?php echo base_url(); ?>admin/eliminadoSuave/Categoria" method="post">
                                    <div class="modal-body">
                                        Esta seguro que quiere eliminar esta categoria?   
                                        <input type="hidden" name="id" value="<?php echo $valor->id; ?>">                                
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Eliminar" tabindex="3">
                                        <input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancelar" tabindex="4">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->

                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

