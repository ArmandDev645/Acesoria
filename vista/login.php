<?php
include_once 'app/config.inc.php';
include_once 'views/apertura.inc.php';
include_once 'app/controlSession.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/validadores/validadorLogin.inc.php';
include_once 'app/conexion.inc.php';

if (ControlSesion::sesionIniciada()) {
  Redirireccion::redirigir(SERVIDOR);
}
if (isset($_POST['enviar'])) {
$correo = $_POST['correo'];
$pass = $_POST['pass'];
Conexion::abrirConexion();
$validador = new Login($correo, $pass, Conexion::getConexion());
if ($validador -> getError() === '' && !is_null($validador -> getUsuario())) {
ControlSesion::IniciarSesion(
  $validador -> getUsuario() -> getIdUsuario(),
  $validador -> getUsuario() -> getNombreUsuario()
);
Redireccion::redirigir(SERVIDOR);
}
}
Conexion::cerrarConexion();
 ?>
<div class="jumbotron text-center">
<h1>Inicia sesion</h1>
</div>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
<h1 class="panel-title text-center">Inicia sesion</h1>
</div>
<div class="panel-body">
  <form role="form" action="<?php echo RUTA_LOGIN;?>" method="post">
  <div class="form-group">
  <label>Correo</label>
  <input type="text" name="correo" class="form-control" required <?php
if (isset($_POST['correo']) && !empty($_POST['correo'])) {
  echo 'value="'.$_POST['correo'].'"';
}
   ?>>
  </div>
  <div class="form-group">
  <label>Contraseña</label>
  <input type="password" name="pass" class="form-control">
  <?php
  if (isset($_POST['enviar'])) {
    $validador -> setError();
  } ?>
  </div>
  <div class="form-group">
    <button type="submit" name="enviar" class="btn btn-primary form-control">sign in</button>
  </div>
  </form>
</div>
</div>
</div>


<?php
include_once 'views/cierre.inc.php';
 ?>
