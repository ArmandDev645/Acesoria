<?php

include_once 'app/objetos/usuario.inc.php';

class RepoUsuario{

public static function getUserByEmail($conexion, $correo){
  $usuario = null;
  if (isset($conexion)) {
    try {
      $sql = "SELECT * FROM usuario WHERE correo_usuario = :correo";
      $sentencia = $conexion -> prepare($sql);
      $sentencia -> bindValue(':correo', $correo, PDO::PARAM_STR);
      $sentencia -> execute();
      $resultado = $sentencia -> fetch();
      if (!empty($resultado)) {
        $usuario = new Usuario(
          $resultado['id_usuario'],
          $resultado['nombre_usuario'],
          $resultado['apellido_usuario'],
          $resultado['correo_usuario'],
          $resultado['password']
        );
      }
    } catch (PDOException $e) {
      print "Error: " .$e -> getMessage();
    }
  }
  return $usuario;
}

public static function getUsersAll($conexion){
  $usuarios = [];
if (isset($conexion)) {
  try {
$sql = "SELECT * FROM usuario";
$sentencia = $conexion -> prepare($sql);
$sentencia -> execute();
$resultado = $sentencia -> fetchAll();
if (count($resultado)) {
  foreach ($resultado as $fila) {
    $usuarios[] = array(
       new Usuario(
         $fila['id_usuario'],
         $fila['nombre_usuario'],
         $fila['apellido_usuario'],
         $fila['correo_usuario'],
         $fila['password']
       )
    );
  }
}
  } catch (PDOException $e) {
print "Error: " .$e -> getMessage();
  }

}
  return $usuarios;
}

public static function insertarUsuario($conexion, $usuario){
$usuario_insertado = false;
if (isset($conexion)) {
  try {
$sql = "INSERT INTO usuario(id_usuario, nombre_usuario, apellido_usuario, correo_usuario, password) VALUES('', :nombre, :apellido, :correo, :pass)";
$sentencia = $conexion -> prepare($sql);
$sentencia -> bindValue(':nombre', $usuario -> getNombreUsuario(),PDO::PARAM_STR);
$sentencia -> bindValue(':apellido', $usuario -> getApellidoUsuario(),PDO::PARAM_STR);
$sentencia -> bindValue(':correo', $usuario -> getCorreoUsuario(),PDO::PARAM_STR);
$sentencia -> bindValue(':pass', $usuario -> getPassword(),PDO::PARAM_STR);
$usuario_insertado = $sentencia -> execute();
  } catch (PDOException $e) {
print "Error: " .$e -> getMessage();
  }

}
return $usuario_insertado;
}
}

 ?>
