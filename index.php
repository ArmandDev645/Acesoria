<?php
include_once 'app/controlSession.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/repos/repoUsuario.inc.php';
include_once 'app/repos/repocategorias.inc.php';
include_once 'app/repos/reposervicios.inc.php';
/*Mira hermanido con estas lineas de codigo modificamos la informacion que pasa por la url y controlamos el comportamiento
de las paginas que muestra el servidor por medio de php*/
$componentes_url = parse_url($_SERVER["REQUEST_URI"]);//Descomponemos la ruta de la url en un path
$ruta = $componentes_url['path'];//almacenamos el path en una variable
$partes_ruta = explode("/", $ruta);//
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);
//Por defecto lanzamos un error 404
$ruta_elegida = 'vista/404.php';
if ($partes_ruta[0] == 'armando') {
  if (count($partes_ruta) == 1) {
    $ruta_elegida = "vista/home.php";
  }else if(count($partes_ruta) == 2){
    if (ControlSesion::sesionIniciada()) {
      switch ($partes_ruta[1]) {
        case 'logout':
          $ruta_elegida = "vista/logon.php";
          break;
        case 'ventas':
        Conexion::abrirConexion();
        $gestor_actual = "";
        $ruta_elegida = "vista/ventas.php";
        Conexion::cerrarConexion();
          break;
        case 'servicios':
        Conexion::abrirConexion();
        $servicios = RepoServicio::getCategoria(Conexion::getConexion());
        $servi = RepoServicio::getServicios(Conexion::getConexion());
        $ruta_elegida = "vista/servicios.php";
        Conexion::cerrarConexion();
          break;
        case 'categorias':
        Conexion::abrirConexion();
        $categoria = RepoCategorias::getCateorias(Conexion::getConexion());
        $autos = RepoCategorias::getAutos(Conexion::getConexion());
        $ruta_elegida = "vista/categorias.php";
        Conexion::cerrarConexion();
          break;
        case 'usuarios':
        Conexion::abrirConexion();
        $usuarios = RepoUsuario::getUsersAll(Conexion::getConexion());
        $ruta_elegida = "vista/usuarios.php";
        Conexion::cerrarConexion();
          break;
        case 'crear-cat':
        Conexion::abrirConexion();
        $ruta_elegida = 'views/temporales/crear-cat.inc.php';
        Conexion::cerrarConexion();
          break;
        case 'crear-auto':
        Conexion::abrirConexion();
        $ruta_elegida = 'views/temporales/crearAuto.inc.php';
        Conexion::cerrarConexion();
          break;
          case 'editar-cat':
          Conexion::abrirConexion();
          $ruta_elegida = 'views/temporales/editarCat.inc.php';
          Conexion::cerrarConexion();
            break;
            case 'crear-ser-cat':
           Conexion::abrirConexion();
            $ruta_elegida = 'views/temporales/crearServicio.inc.php';
            Conexion::cerrarConexion();
              break;
          case 'crear-servicio':
          Conexion::abrirConexion();
           $ruta_elegida = 'views/temporales/crearServicio2.inc.php';
           Conexion::cerrarConexion();
            break;
    }
  }else {
    switch ($partes_ruta[1]) {
      case 'login':
      $ruta_elegida = "vista/login.php";
        break;
    }
  }

}else if (count($partes_ruta) == 3  && ControlSesion::sesionIniciada()) {
  if ($partes_ruta[1] == 'ventas') {
    switch ($partes_ruta[2]) {
      case 'seleccion':
        $gestor_actual = "seleccion";
        $ruta_elegida = "vista/ventas.php";
        break;
      case '':
        // code...
        break;

    }
  }
}
}
include_once $ruta_elegida;
 ?>
