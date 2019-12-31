<?php

class Validador{
  /*Variables protegidas de verificacion de login*/
  protected $correo;
  protected $pass;
  protected $error_correo;
  protected $error_pass;

/*Avisos de error*/
  protected $avisoApertura;
  protected $avisoCierre;

  public function __construct(){

  }
  /*--------------------------------------------*/
#Esta funcion nos ayuda a validar si las variables fueron iniciadas
  protected function variableIniciada($variable){
    if (isset($variable) && !empty($variable)) {
      return true;
    }else {
      return false;
    }
    return "";
  }
/*--------------------------------------------*/

/*--------------------------------------------*/
/*Comienzan las validaciones*/
#Esta funcion valida si el correo usuario existe y es correcto
protected function validarCorreoUsuarioLogin($correo){
  if (!$this -> variableIniciada($correo)) {
    return "Debes ingresar un correo electronico";
  }if (!RepoUsuario::getCorreoUsuario($conexion, $correo)) {
    
  }
  else {
    $this -> correo = $correo;
  }
}
protected function validarPassLogin($pass, $correo){
  if (!$this -> variableIniciada($pass)) {
    return "Debes ingresar tu contraseña;"
  }
  if () {

  }
  else {
    $this -> pass = $pass;
  }
}
/*--------------------------------------------*/

/*--------------------------------------------*/
/*Comienzan los getters*/
public function getCorreo(){
  return $this -> correo;
}
/*--------------------------------------------*/

/*--------------------------------------------*/
/*Comienzan los setters*/
public function setCorreo(){
  if ($this -> correo !=="") {
    echo 'value="'.$this -> correo.'"';
  }
}
/*--------------------------------------------*/

/*--------------------------------------------*/
/*Comienzan los errores de validacion*/
public function serErrorCorreo(){
  if ($this -> error_correo !== "") {
    echo $this -> avisoApertura.$this -> error_correo.$this -> avisoCierre;
  }
}
/*--------------------------------------------*/

/*--------------------------------------------*/
/*Comienzan las funciones de validacion correcta*/
  public function loginValidado(){
    if ($this -> error_correo === "" && $this -> error_pass === "") {
return true;
}else {
return false;
}
  }
/*--------------------------------------------*/
}

 ?>
