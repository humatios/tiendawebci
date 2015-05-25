<section class="row">
    <div class="col-md-8">
        <br/><br/>
        
        <?php echo validation_errors(); ?>

        <form class="form-horizontal" action="<?php echo base_url() ?>home/contact" method="post">
            <div class="form-group">
                <label class="control-label col-xs-3">Nombre:</label>
                <div class="col-xs-7">
                    <input type="text" name="nombre" class="form-control" required="required" id="nombre" placeholder="Nombre" tabindex="1" title="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Email:</label>
                <div class="col-xs-7">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" tabindex="2" title="Email">                                
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3" >Asunto:</label>
                <div class="col-xs-7">
                    <input type="text" name="asunto" class="form-control" placeholder="Asunto" tabindex="3">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-3">Mensaje:</label>
                <div class="col-xs-7">
                    <textarea rows="3" name="mensaje" class="form-control" placeholder="Mensaje" tabindex="4"></textarea>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="submit" class="btn btn-primary" value="Enviar" tabindex="5">
                    <input type="reset" class="btn btn-default" value="Limpiar" tabindex="6">
                </div>
            </div>
        </form>

    </div>

    <div class="col-md-4 text-center">
        <address>
            <b>Barranquilla</b><br/>
            Universidad de la Costa (CUC)<br/>
            Calle 58 # 55 - 66 <br/><br/>
        </address>
        <h4>Participantes</h4>
        <b>Fabian Acosta</b><br>
        fab261291@gmail.com <br/><br/>
        <b>Yurleidys Jimenez</b><br>
        yurleidys94@gmail.com <br/><br/>
        <b>Leonardo Romero</b><br/>
        leoromeros28@gmail.com <br/><br/>
        <b>Hugo Tilano</b><br/>
        humatios@gmail.com<br/><br/>
    </div>

</section>