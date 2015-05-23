<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $titulo; ?></title>
        <meta name="description" content="Tienda Online">
        <meta name="author" content="GrupoCUC">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css"/>  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sticky-footer.css"/>           
    </head>

    <body>

        <?php $this->load->view('plantilla/_front_end/_header') ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    &nbsp;
                    
                    <?php $this->load->view($contenido) ?>

                </div>                
            </div>
            &nbsp;
        </div>

        <?php $this->load->view('plantilla/_front_end/_footer') ?> 

        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
