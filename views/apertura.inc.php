<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
//Esta linea de codigo comprueba si existe una variable llamada titulo, la cual va a variar con respecto de la pagina que ingreses
if (!isset($titulo) || empty($titulo)) {
  $titulo = 'Autolavado';
}
//Esta linea de codigo
if (!isset($descripcion) || empty($descripcion)) {
  $descripcion = 'Sitio web que administra un autolavado';
}
//Aqui imprimimos el titulo que proviene de la variable titulo
echo "<title>$titulo</title>";

 ?>


<link rel="stylesheet" href="<?php echo RUTA_CSS?>bootstrap.min.css">
<link rel="stylesheet" href="<?php echo RUTA_CSS?>font-awesome.min.css">
<link rel="stylesheet" href="<?php echo RUTA_CSS?>estilos.css">
<link rel="stylesheet" href="<?php echo RUTA_CSS?>animate.css">
<meta name="keywords" content="<?php echo $keyword; ?>">
<meta name="description" content="<?php echo $descripcion; ?>">

<link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA_MEDIA;?>imagenes/logo.png">

<script defer src="<?php echo RUTA_JS?>jquery.js"></script>
<script defer src="<?php echo RUTA_JS?>bootstrap.min.js"></script>

</head>
<body>
