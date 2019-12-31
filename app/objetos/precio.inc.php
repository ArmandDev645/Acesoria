<?php

class Precio{

private $id_precio;
private $precio;
private $categoria;
private $servicio_categoria;
private $servicio_id_servicio;

public function __construct($id_precio, $precio, $categoria, $servicio_categoria, $servicio_id_servicio){
$this -> id_precio = $id_precio;
$this -> precio = $precio;
$this -> categoria = $categoria;
$this -> servicio_categoria = $servicio_categoria;
$this -> servicio_id_servicio = $servicio_id_servicio;
}

public function getIdPrecio(){
return $this -> id_precio;
}
public function getPrecio(){
return $this -> precio;
}
public function getCategoria(){
return $this -> categoria;
}
public function getServiciosCategoria(){
return $this -> servicio_categoria;
}
public function getServiciosIdServicio(){
return $this -> servicio_id_servicio;
}
}

 ?>
