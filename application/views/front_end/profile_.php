<h3>Perfil</h3>
        
        <form class="form-horizontal" action = "" >
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input class="form-control" value="<?php echo $valores->nombre; ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Apellido:</label>
            <div class="col-lg-8">
              <input class="form-control" value=<?php echo $valores->apellido; ?> type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Telefono:</label>
            <div class="col-lg-8">
              <input class="form-control" value=<?php echo $valores->telefono; ?> type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value=<?php echo $valores->email; ?> type="text">
            </div>
          </div>
          
            
          <div class="form-group">
            <label class="col-md-3 control-label">Direccion:</label>
            <div class="col-md-8">
              <input class="form-control" value=<?php echo $valores->direccion; ?> type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Ciudad:</label>
            <div class="col-md-8">
              <input class="form-control" value=<?php echo $valores->ciudad; ?> type="text">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="button">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
        </form>

