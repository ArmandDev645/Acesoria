<?php
include_once 'app/objetos/autos.inc.php';
class RepoCategorias{

  public static function insertarCategoria($conexion, $categorias){
$categoria = false;
if (isset($conexion)) {
  try {
$sql = "INSERT INTO autos_categoria(id_autos_categoria, nombre_categoria) VALUES('', :categoria)";
$sentencia = $conexion -> prepare($sql);
$sentencia -> bindValue(':categoria', $categorias, PDO::PARAM_STR);
$categoria = $sentencia -> execute();
  } catch (PDOException $e) {
print "Error: " .$e -> getMessage();
  }
}
return $categoria;
  }

  public static function getCateorias($conexion){
  $categorias = [];
if (isset($conexion)) {
  try {
$sql = "SELECT * FROM autos_categoria";
$sentencia = $conexion -> prepare($sql);
$sentencia -> execute();
$resultado = $sentencia -> fetchAll();
if (count($resultado)) {
  foreach ($resultado as $fila) {
    $categorias[] = array(
      $fila['id_autos_categoria'],
      $fila['nombre_categoria']
    );
  }
}
  } catch (PDOException $e) {
print "Error: " .$e -> getMessage();
  }

}
  return $categorias;
  }

  public static function insertarAuto($conexion, $categoria, $marca, $modelo){
    $auto = false;
if (isset($conexion)) {
  try {
$sql = "INSERT INTO autos(id_auto, autos_categoria_id_autos_categoria, marca_auto, modelo_auto) VALUES('', :categoria, :marca, :modelo)";
$sentencia = $conexion -> prepare($sql);
$sentencia -> bindValue(':categoria', $categoria, PDO::PARAM_STR);
$sentencia -> bindValue(':marca', $marca, PDO::PARAM_STR);
$sentencia -> bindValue(':modelo', $modelo, PDO::PARAM_STR);

$auto = $sentencia -> execute();
  } catch (PDOException $e) {
print "Error: " .$e -> getMessage();
  }

}
    return $auto;
  }


 public static function getAutos($conexion){
$auto =  [];
if(isset($conexion)){
  try {
    $sql = "SELECT * FROM autos";
    $sentencia = $conexion -> prepare($sql);
    $sentencia -> execute();
    $resultado = $sentencia -> fetchAll();
    if(count($resultado)){
      foreach ($resultado as $fila) {
        $auto[] = array(
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
    print "error: ". $e -> getMessage();

  }

}
return $auto;
 }

public static function editarCat($conexion,$categoria,$id){
  $false  = false;
  if(isset($conexion)){
    try {
      $sql = "UPDATE autos_categoria SET nombre_categoria = :cat WHERE id_autos_categoria = :id";
      $sentencia = $conexion -> prepare($sql);
      $sentencia -> bindValue(':cat',$categoria,PDO::PARAM_STR);
      $sentencia ->bindValue(':id',$id , PDO:: PARAM_STR);
      $false = $sentencia -> execute();
    } catch (PDOException $e) {
      print "error :" . $e ->getMessage();


    }

  }
  return $false;

}
}
 ?>
