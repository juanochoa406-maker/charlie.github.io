<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>

</head>
<body>

<h2>Registro del usuario</h2>
    
<form action="logica.php" method="get">

    <label for="">Nombre:</label>
    <input type="text" maxlength="35" name="nombre">
    <hr>
    <label for="">Primer Apellido</label>
    <input type="text"  required name="1erApellido">
    <hr>
    <label for="">Segundo Apellido</label>
    <input type="text" name="2doApellido">
    <hr>
    <label for="">Edad</label>
    <input type="number" name="edad">
    <hr>
    <label for="">Correo Electronico</label>
    <input type="email" name="correo">
    <hr>
    <label for="">Contraseña</label>
    <input type="password" name="password">

    <button type="submit">Enviar</button>
</body>
</html>