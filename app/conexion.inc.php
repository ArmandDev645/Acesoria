<?php

class Conexion{

  private static $conexion;


public static function abrirConexion(){

  #Verificamos la conexion

  if(!isset(self::$conexion)){
    try {
      include_once 'config.inc.php';
      self::$conexion = new PDO('mysql:host='.NOMBRE_SERVIDOR.'; dbname='.NOMBRE_BASE, NOMBRE_USER, PASS);
      self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$conexion -> exec("SET CHARACTER SEt utf8");

    } catch (PDOException $e) {
      print "Error con la conexion de la base de datos" . $e -> getMessage() . "<br>";
      die();
    }

  }
}

public static function cerrarConexion(){

  if(isset(self::$conexion)){
    self::$conexion = null;
  }
}

public static function getConexion(){
  return self::$conexion;
}


}

 ?>
