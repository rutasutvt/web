<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrosrc";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$matricula = $_POST['matricula'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Encriptar contraseña

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellidos, correo, matricula, contraseña) 
        VALUES ('$nombre', '$apellidos', '$correo', '$matricula', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. <a href='iniciosesion.html'>Iniciar sesión</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>