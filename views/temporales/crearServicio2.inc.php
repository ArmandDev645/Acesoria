<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/repos/reposervicios.inc.php';
$serv = $_POST['categoria'];
$nombre = $_POST['servicio'];
Conexion::abrirConexion();
$insertarSer = RepoServicio::insertarServicio(Conexion::getConexion(),$serv, $nombre);
Conexion::cerrarConexion();
if($insertarSer){
  Redireccion::redirigir(RUTA_SERVICIOS);
}

 ?>
