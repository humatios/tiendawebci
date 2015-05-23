
<form class = "form-horizontal" action = "<?php echo base_url() ?>signup/addUsuario" method = "post">
    <div class = "form-group">
        <label class = "control-label col-xs-3">Usuario:</label>
        <div class = "col-xs-7">
            <input type = "text" name = "ID" class = "form-control" required = "required" id = "id" placeholder = "Nombre" tabindex = "1" title = "Usuario">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-xs-3">Nombre:</label>
        <div class = "col-xs-7">
            <input type = "text" name = "nombre" class = "form-control" required = "required" id = "nombre" placeholder = "Nombre" tabindex = "2" title = "Nombre">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-xs-3">Apellido:</label>
        <div class = "col-xs-7">
            <input type = "text" name = "apellido" class = "form-control" required = "required" id = "apellido" placeholder = "Apellido" tabindex = "3" title = "Apellido">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-xs-3">Email:</label>
        <div class = "col-xs-7">
            <input type = "email" name = "email" class = "form-control" required = "required" id = "email" placeholder = "Email" tabindex = "4" title = "Email">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-xs-3" >Direccion:</label>
        <div class = "col-xs-7">
            <input type = "text" name = "direccion" class = "form-control" placeholder = "Direccion" tabindex = "5">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-xs-3" >Ciudad:</label>
        <div class = "col-xs-7">
            <input type = "text" name = "ciudad" class = "form-control" placeholder = "Ciudad" tabindex = "6">
        </div>
    </div>
    <div class = "form-group">
        <label class = "control-label col-xs-3" >Telefono:</label>
        <div class = "col-xs-7">
            <input type = "tel" name = "telefono" class = "form-control" placeholder = "Telefono" tabindex = "7">
        </div>
    </div>
    
    <br>
    <div class = "form-group">
        <div class = "col-xs-offset-3 col-xs-9">
            <input type = "submit" class = "btn btn-primary" value = "Enviar" tabindex = "8">
            <input type = "reset" class = "btn btn-default" value = "Limpiar" tabindex = "9">
        </div>
    </div>
</form>

