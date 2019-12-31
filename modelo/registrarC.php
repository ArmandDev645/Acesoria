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

$id = $_POST['id-cliente'];
$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$insertar = "INSERT INTO cliente VALUES ('$id','$nombre','$matricula','$direccion','$telefono','$correo')";

$resultado = mysqli_query($conexion,$insertar)

or die("error en los registros");

mysqli_close($conexion);

echo "Datos insertados correctamente";
?>
</label>
</body>
</html>
