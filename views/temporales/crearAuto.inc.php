<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/repor/repoCategorias.inc.php';

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$categoria = $_POST['categoria'];
Conexion::abrirConexion();
$insertar = RepoCategorias::insertarAuto(Conexion::getConexion(), $categoria, $marca, $modelo);
Conexion::cerrarConexion();
if ($insertar) {
  Redireccion::redirigir(RUTA_CATEGORIAS);
}


 ?>
