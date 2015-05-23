<?php $valores = $this->basemodelo_model->Obtener('categoria'); ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Navegador</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                Super Tienda <span class="glyphicon glyphicon-shopping-cart " ></span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  

            <form class="navbar-form navbar-left" role="search">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Categoria <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <?php foreach ($valores->result() as $valor): ?>
                                <?php if ($valor->activo == 1): ?>
                                    <li><a href=""><?php echo $valor->nombre; ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <input type="text" class="form-control" placeholder="Buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Ir</button>
                    </span>
                </div>
            </form>
            <ul class="nav nav-tabs navbar-nav navbar-right pull-right">
                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><a href="">Ofertas</a></li>
                <li><a href="">Registrarse | Ingresar</a></li>  
                <li><a href="<?php echo site_url(); ?>admin">Administrar</a></li>  
            </ul>

        </div>
    </div>
</nav>
