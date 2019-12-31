<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ticket</h3>
  </div>
  <div class="panel-body">
    <table class="table table-responsive">
    <tr>
      <th>Compra</th>
      <th><?php  ?></th>
    </tr>
    <tr>
      <th>Usuario</th>
      <th><?php echo $_SESSION['id_usuario'];?></th>
    </tr>
    <tr>
      <th>Cliente</th>
      <th><?php  ?></th>
    </tr>
    <tr>
      <th>Auto</th>
      <th><?php  ?></th>
    </tr>
    <tr>
      <tr>
        <th>Servicio</th>
        <th><?php  ?></th>
      </tr>
      <tr>
      <th>Forma de pago</th>
      <th><?php  ?></th>
    </tr>
    <tr>
      <th>Precio</th>
      <th><?php  ?></th>
    </tr>
    <tr>
      <th>Fecha</th>
      <th><?php  ?></th>
    </tr>
    </table>
    <div class="form-group">
      <a href="<?php echo RUTA_VENTAS ?>" class="btn btn-primary">Nueva orden</a>
    </div>

  </div>
  <div class="panel-footer">

  </div>
</div>
</div>
