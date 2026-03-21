<?php 
$nombreUsuario = $_GET['nombre'];
$primerApellido = $_GET['1erApellido'];
$segundoApellido = $_GET['2doApellido'];
$edad = $_GET['edad'];
$correo = $_GET['correo'];
$password = $_GET['password'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h2>Datos del usuario</h2>

<p><strong>Mi nombre completo es:</strong> <?php echo $nombreUsuario . " " . $primerApellido . " " . $segundoApellido; ?></p>

<p><strong>Mi edad es:</strong> <?php echo $edad; ?> <strong>años</strong> </p>

<p><strong>Mi correo electronico es:</strong> <?php echo $correo; ?></p>

<p><strong>Mi contraseña es:</strong> <?php echo str_repeat("*", strlen($password)); ?></p>

</body>
</html>