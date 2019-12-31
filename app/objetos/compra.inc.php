<?php

class Compra{

private $id_compra;
private $usuario;
private $cliente;
private $auto;
private $pago;
private $precio;
private $fecha;

public function __construct(){
$this -> id_compra = $id_compra;
$this -> usuario = $usuario;
$this -> cliente = $cliente;
$this -> auto = $auto;
$this -> pago = $pago;
$this -> precio = $precio;
$this -> fecha = $fecha;
}

public function getIdCompra(){
return $this -> id_compra;
}
public function getUsuario(){
return $this -> usuario;
}
public function getCliente(){
return $this -> cliente;
}
public function getAuto(){
return $this -> auto;
}
public function getPago(){
return $this -> pago;
}
public function getPrecio(){
return $this -> precio;
}
public function getFecha(){
return $this -> fecha;
}

}
 ?>
