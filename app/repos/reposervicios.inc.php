<?php
include_once 'app/objetos/autos.inc.php';
class RepoServicio{
public static function insertarCategoria($conexion,$categoria){
  $false = false;
  if(isset($conexion)){

    try {
$sql = "INSERT INTO servicios_categoria(id_servicios_categoria, categoria_servicio) VALUES('', :servicio)";
$sentencia = $conexion -> prepare($sql);
$sentencia -> bindValue(':servicio', $categoria, PDO::PARAM_STR);
$false= $sentencia -> execute();


    } catch(PDOException $e) {
      print "error:" .$e ->getMenssage();
    }

  }
  return $false;

}

public static function getCategoria($conexion){
  $cate = [];
if (isset($conexion)) {
  try {
$sql = "SELECT * FROM servicios_categoria";
$sentencia = $conexion -> prepare($sql);
$sentencia -> execute();
$resultado = $sentencia -> fetchAll();
if (count($resultado)) {
  foreach ($resultado as $fila) {
    $cate[] = array(
      $fila['id_servicios_categoria'],
      $fila['categoria_servicio']
    );
  }
}
  } catch (PDOException $e) {
print "Error: " .$e -> getMenssage();
  }

}
  return $cate;
}

public static function insertarServicio($conexion, $serv, $nombre){
  $serv_insertado = false;
if (isset($conexion)) {
  try {
$sql = "INSERT INTO servicios(id_servicios, servicios_categoria_id_servicios_categoria, nombre_servicio) Values('', :cate, :nombre)";
$sentencia = $conexion -> prepare($sql);
$sentencia -> bindValue(':cate', $serv, PDO::PARAM_STR);
$sentencia -> bindValue(':nombre', $nombre, PDO::PARAM_STR);
$serv_insertado = $sentencia -> execute();
  } catch (PDOException $e) {
print "Error: " .$e -> getMessage();
  }

}
  return $serv_insertado;
}

public static function getServicios($conexion){
  $servicios = [];
if (isset($conexion)) {
  try {
$sql = "SELECT * FROM servicios";
$sentencia = $conexion -> prepare($sql);
$sentencia -> execute();
$resultado = $sentencia -> fetchAll();
if (count($resultado)) {
  foreach ($resultado as $fila) {
    $servicios[] = array(
      $fila['id_servicios'],
      $fila['servicios_categoria_id_servicios_categoria'],
      $fila['nombre_servicio']
    );
  }
}
  } catch (PDOException $e) {
print "Error: " .$e -> getMessage();
  }

}
  return $servicios;
}

public static function getAutos($conexion){
$recuperados = [];
if (isset($conexion)) {
  try {
$sql = "SELECT * FROM autos";
$sentencia = $conexion -> prepare();
$sentencia -> execute();
$resultado = $sentencia -> fetchAll();
if (count($resultado)) {
  foreach ($resultado as $fila) {
    $recuperados[] = array(
new Auto(
  $fila['id_auto'],
  $fila['autos_categoria_id_autos_categoria'],
  $fila['marca_auto'],
  $fila['modelo_auto']
)
);
  }
}
  } catch (PDOException $e) {
print "Error: " .$e -> getMenssage();
  }

}
return $recuperados;
}


}


 ?>
