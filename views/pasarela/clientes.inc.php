<?php
include_once 'app/config.inc.php';
include_once 'app/objetos/clientes.inc.php';
include_once 'app/repos/repoCliente.inc.php';
include_once 'app/conexion.inc.php';

if (isset($_POST['registrar'])) {
  $usuario = new Usuario(
    '',
    $_POST['nombre'],
    $_POST['apellido']
  );

  Conexion::abrirConexion();
  $isertar = RepoCliente::insertarCliente(Conexion::getConexion(), $usuario);
  if ($isertar) {
  Redireccion::redirigir(RUTA_SELECCION);

  }
  Conexion::cerrarConexion();
}
 ?>

<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Inserta el cliente</h3>
  </div>
  <div class="panel-body">
<form role="form" action="<?php echo RUTA_VENTAS;?>" method="post">
<div class="form-group">
<label>Nombre cliente</label>
<input type="text" name="nombre" class="form-control">
</div>
<div class="form-group">
<label>Apellido cliente</label>
<input type="text" name="apellido" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="registrar" class="btn btn-primary form-control">Registrar</button>
</div>
</form>
  </div>
  <div class="panel-footer">

  </div>
</div>
</div>
