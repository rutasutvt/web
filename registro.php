<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="procesar_registro.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" required><br><br>

        <label for="correo">Correo electrónico:</label><br>
        <input type="email" name="correo" required><br><br>

        <label for="matricula">Matrícula:</label><br>
        <input type="text" name="matricula" required><br><br>

        <label for="contraseña">Contraseña:</label><br>
        <input type="password" name="contraseña" required><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>