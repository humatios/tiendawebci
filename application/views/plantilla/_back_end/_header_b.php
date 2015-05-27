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
            <a class="navbar-brand" href="<?php echo base_url().'admin'; ?>">
                Super Tienda <span class="glyphicon glyphicon-shopping-cart " ></span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
            
            <ul class="nav nav-tabs navbar-nav navbar-right pull-right">
                <li><a href="<?php echo site_url(); ?>">Home</a></li>                
                <li><a href="">Cerrar sesion </a></li>  
            </ul>

        </div>
    </div>
</nav>
