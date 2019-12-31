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

$id = $_POST['id-ticket'];
$cliente = $_POST['cliente'];
$empleado = $_POST['empleado'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];



$insertar = "INSERT INTO ticket VALUES ('$id','$cliente','$empleado','$fecha','$hora')";

$resultado = mysqli_query($conexion,$insertar)

or die("error en los registros");

mysqli_close($conexion);

echo "Datos insertados correctamente";
?>
</label>
</body>
</html>
