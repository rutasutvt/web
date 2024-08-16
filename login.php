<?php
session_start();
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
$matricula = $_POST['nombre1'];
$contraseña = $_POST['contraseña'];

// Consultar datos en la base de datos
$sql = "SELECT * FROM usuarios WHERE matricula='$matricula'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contraseña, $row['contraseña'])) {
        $_SESSION['matricula'] = $matricula;
        header("Location: pagina_restringida.php");
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$conn->close();
?>