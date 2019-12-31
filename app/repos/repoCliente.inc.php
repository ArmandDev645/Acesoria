<?php

class RepoCliente{

  public static function insertarCliente($conexion, $cliente){
$usuario = false;
if (isset($conexion)) {
  try {
$sql = "INSERT INTO clientes(id_cliente, nombre_cliente, apellido_cliente) VALUES('', :nombre, :apellido)";
$sentencia = $conexion -> prepare($sql);
$sentencia -> bindValue(':nombre', $cliente -> getNombreCliente(), PDO::PARAM_STR);
$sentencia -> bindValue(':apellido', $cliente -> getApellidoCliente(), PDO::PARAM_STR);
$usuario = $sentencia -> execute();
  } catch (PDOException $e) {
  print "Error: " .$e -> getMessage();
  }

}
return $usuario;
  }
}

 ?>
