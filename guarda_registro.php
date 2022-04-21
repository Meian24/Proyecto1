<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Guardar Registro</title>
</head>
<body>
<?php
include('dbcon.php');
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conexion->query("insert into usuario (usuario,nombre,apellidos,email,pass) values ('$usuario','$nombre','$apellidos','$email','$pass')");	
?>
<script>
	alert('Usuario registrado correctamente, accede a tu perfil');	
</script>
<?php
    header("location:login.php");
?>


</body>
</html>