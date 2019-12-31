<?php
include_once 'app/config.inc.php';
include_once 'app/repos/repocategorias.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/repos/repocategorias.inc.php';
include_once 'app/conexion.inc.php';

$categoria = $_POST['categoria'];
Conexion::abrirConexion();
$insertar = RepoCategorias::insertarCategoria(Conexion::getConexion(), $categoria);
Conexion::cerrarConexion();
if ($insertar) {
  Redireccion::redirigir(RUTA_CATEGORIAS);
}

 ?>
