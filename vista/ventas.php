<?php
include_once 'app/config.inc.php';
include_once 'views/apertura.inc.php';
include_once 'views/navegacion.inc.php';
include_once 'app/escritores/escritorHelper.inc.php';
include_once 'app/objetos/usuario.inc.php';
include_once 'app/repos/repoUsuario.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'views/pasarela/apertura.inc.php';

switch ($gestor_actual) {
  case 'clientes':
    include_once 'views/pasarela/ticket.inc.php';
    break;
  case 'seleccion':
    include_once 'views/pasarela/ticket2.inc.php';
    break;

  default:
include_once 'views/pasarela/ticket.inc.php';
include_once 'views/pasarela/clientes.inc.php';
  break;

}

include_once 'views/pasarela/cierre.inc.php';
include_once 'views/cierre.inc.php';
  ?>
