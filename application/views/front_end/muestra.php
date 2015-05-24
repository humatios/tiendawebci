<?php $valores = $this->basemodelo_model->Obtener('producto'); ?>
<section class="row">
    <?php foreach ($valores->result() as $valor): ?>
        <?php if ($valor->estado == 1): ?>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/320x150" alt="">
                    <div class="caption">                        
                        <h4><a href="<?php //echo $valor->url;  ?>"><?php echo $valor->nombre; ?></a>
                        </h4>
                        <h4 class="pull-right">$ <?php echo $valor->precio; ?></h4>
                        <p><?php echo $valor->descripcion; ?></p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">Disponibles: <?php echo $valor->stock; ?></p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        </p>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    <?php endforeach; ?>

</section>
