<?php
include_once 'app/config.inc.php';
include_once 'views/apertura.inc.php';
include_once 'views/navegacion.inc.php';
include_once 'app/escritores/escritorHelper.inc.php';
include_once 'app/objetos/usuario.inc.php';
include_once 'app/repos/repoUsuario.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
if (isset($_POST['enviar'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $pass = $_POST['pass'];

  $usuario = new Usuario(
    '',
    $nombre,
    $apellido,
    $correo,
    $pass
  );
  Conexion::abrirConexion();
  $insert = RepoUsuario::insertarUsuario(Conexion::getConexion(), $usuario);
  if ($insert) {
    Redireccion::redirigir(RUTA_USUARIOS);
  }
Conexion::cerrarConexion();
}

 ?>
<div class="jumbotron">
<h1>Gestion de usuarios</h1>
<p>Nuevos y actuales</p>
</div>
<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">
<h1 class="panel-title text-center">Usuarios reistrados</h1>
</div>
<div class="panel-body">
<table class="table table-responsive">
<thead>
  <tr>
    <th>Id</th>
    <th>Usuario</th>
    <th>Correo</th>
  </tr>
</thead>
<tbody>
  <?php Helper::escribirUsuarios($usuarios);?>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-md-6">
  <div class="panel panel-default">
  <div class="panel-heading">
<h1 class="panel-title text-center">Registrar usuarios</h1>
  </div>
  <div class="panel-body">
<form role="form" action="<?php echo RUTA_USUARIOS;?>" method="post">
<div class="form-group">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control">
</div>
<div class="form-group">
<label>Apellido</label>
<input type="text" name="apellido" class="form-control">
</div>
<div class="form-group">
<label>Correo</label>
<input type="text" name="correo" class="form-control">
</div>
<div class="form-group">
<label>Contraseña</label>
<input type="text" name="pass" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="enviar" class="btn btn-primary form-control">Registrar</button>
</div>
</form>
  </div>
  </div>
</div>
</div>
 <?php
include_once 'views/cierre.inc.php';
  ?>
