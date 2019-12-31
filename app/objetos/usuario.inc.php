<?php
/*Esta clase manipula la informacion del
 usuario en la base de datos*/
//Esta es la clase usuario

class Usuario{

private $id_usuario;
private $nombre_usuario;
private $apellido_usuario;
private $correo_usuario;
private $password;

#Funcion costructor
public function __construct($id_usuario, $nombre_usuario, $apellido_usuario, $correo_usuario, $password){
  $this -> id_usuario = $id_usuario;
  $this -> nombre_usuario = $nombre_usuario;
  $this -> apellido_usuario = $apellido_usuario;
  $this -> correo_usuario = $correo_usuario;
  $this -> password = $password;
  }

#Getters
public function getIdUsuario(){
  return $this -> id_usuario;
}
public function getNombreUsuario(){
  return $this -> nombre_usuario;
}
public function getApellidoUsuario(){
 return $this -> apellido_usuario;
}
public function getCorreoUsuario(){
 return $this -> correo_usuario;
}
public function getPassword(){
 return $this -> password;
}


#Setters
public function setIdUsuario($id_usuario){
  $this -> id_usuario = $id_usuario;
}
public function setNombreUsuario($nombre_usuario){
  $this -> nombre_usuario = $nombre_usuario;
}
public function setApellidoUsuario($apellido_usuario){
 $this -> apellido_usuario = $apellido_usuario;
}
public function setCorreoUsuario($correo_usuario){
 $this -> correo_usuario = $correo_usuario;
}
public function setPassword($password){
 $this -> password = $password;
}

}

 ?>
