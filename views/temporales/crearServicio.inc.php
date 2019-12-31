<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/repos/reposervicios.inc.php';
$servicio = $_POST['categoria'];
Conexion::abrirConexion();
$insertarSer = RepoServicio::insertarCategoria(Conexion::getConexion(),$servicio);
Conexion::cerrarConexion();
if($insertarSer){
  Redireccion::redirigir(RUTA_SERVICIOS);
}

 ?>
