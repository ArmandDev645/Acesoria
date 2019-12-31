<?php

class Clintes{

private $id_cliente;
private $nombre_cliente;
private $apellido_cliente;

public function __construct($id_cliente, $nombre_cliente, $apellido_cliente){
  $this -> id_cliente = $id_cliente;
  $this -> nombre_cliente = $nombre_cliente;
  $this -> apellido_clente = $apellido_cliente;

}

public function getIdCliente(){
 return $this -> id_cliente;
}
public function getNombreCliente(){
 return $this -> nombre_cliente;
}
public function getApellidoCliente(){
 return $this -> apellido_clente;
}

}
 ?>
