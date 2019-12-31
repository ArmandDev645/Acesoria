<?php
/*Mira hermanito con este archivo creamos las rutas que usaremos de
configuracion del backend*/
#Constantes de la base con estas hace conexion a la base de datos
define('NOMBRE_SERVIDOR', 'localhost');
define('NOMBRE_USER', 'root');
define('NOMBRE_BASE', 'autolavado');
define('PASS', '');

#Esta es la ruta del srvidor, es la raiz del proyecto
define("SERVIDOR", "http://localhost/armando");

#Estas son las rutas del cuerpo del proyecto
define("RUTA_VENTAS", SERVIDOR."/ventas");#Recuerda hermanito que son las rutas las que controlan las direcciones a las que accede el usuario
define("RUTA_SERVICIOS", SERVIDOR."/servicios");
define("RUTA_CATEGORIAS", SERVIDOR."/categorias");
define("RUTA_USUARIOS", SERVIDOR."/usuarios");
define("RUTA_LOGIN", SERVIDOR."/login");
define("RUTA_LOGON", SERVIDOR."/logout");

define("RUTA_CREAR_CAT", SERVIDOR."/crear-cat");
define("RUTA_CREAR_AUTO", SERVIDOR."/crear-auto");
define("RUTA_EDITAR_CAT", SERVIDOR."/editar-cat");
define("RUTA_CREAR_SER", SERVIDOR."/crear-ser-cat");
define("RUTA_CREAR_SERVICIO", SERVIDOR."/crear-servicio");
#Estas son las rutas de las herramientas del proyecto
define("RUTA_CSS", SERVIDOR."/css/");
define("RUTA_JS", SERVIDOR."/js/");
define("RUTA_MEDIA", SERVIDOR."/imagenes/");

 ?>
