<?php

class Servicio{

  private $id_servicios;
  private $servicios_categoria;
  private $nombre_servicio;

  public function __construct($id_servicios, $servicios_categoria, $nombre_servicio){
    $this -> id_servicos = $id_servicios;
    $this -> servicios_categoria = $servicios_categoria;
    $this -> nombre_servicio = $nombre_servicio;
  }
public function getIdServicios(){
 return $this -> id_servicios;
}
public function getServiciosCategoria(){
 return $this -> servicios_categoria;
}
public function getNombreServico(){
 return $this -> nombre_servicio;
}
}
 ?>
