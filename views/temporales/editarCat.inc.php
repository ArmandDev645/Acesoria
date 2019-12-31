<?php
include_once "app/config.inc.php";
include_once "app/redireccion.inc.php";
include_once "app/conexion.inc.php";
include_once "app/repos/repocategorias.inc.php";
$categorias = $_POST['categoria'];
$id = $_POST['id'];
Conexion::abrirConexion();
$categoriaEditada = RepoCategorias::editarCat(Conexion::getConexion(),$categorias, $id);
Conexion::cerrarConexion();
if($categoriaEditada){
Redireccion::redirigir(RUTA_CATEGORIAS);



}


 ?>
