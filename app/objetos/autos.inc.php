<?php

class Auto{

  private $id_auto;
  private $auto_categoria;
  private $marca;
  private $modelo;

  public function __construct($id_auto, $auto_categoria, $marca, $modelo){
    $this -> id_auto = $id_auto;
    $this -> auto_categoria = $auto_categoria;
    $this -> marca = $marca;
    $this -> modelo = $modelo;
  }
 public function getIdAuto(){
 return $this -> id_auto;
}
 public function getAutoCategoria(){
 return $this -> auto_categoria;
}
 public function getMarca(){
 return $this -> marca;
}
 public function getModelo(){
 return $this -> modelo;
}

}
 ?>
