<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">
</head>
<body background="../imagenes/imagen.jpg">
	<label class="mensaje-cliente">
<?php 
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "autolavado";

$conexion = mysqli_connect($server,$usuario,$contraseña,$bd)
or die("error en la conexion");

$id = $_POST['id-categoria'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria_auto = $_POST['categoria_auto'];



$insertar = "INSERT INTO servicio VALUES ('$id','$nombre','$descripcion','$categoria_auto')";

$resultado = mysqli_query($conexion,$insertar)

or die("error en los registros");

mysqli_close($conexion);

echo "Datos insertados correctamente";
?>
</label>
</body>
</html>
