<?php
$server = "localhost";
$username = "root";
$password = "toor";
$dbname = "myDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];
$nacido = $_POST['nacido'];

// Insertar datos en la base de datos
$sql = "INSERT INTO MyGuests (nombre, correo, telefono, contrasena, nacido)
VALUES ('$nombre', '$correo', '$telefono', '$contrasena', '$nacido')";

if ($conn->query($sql) === TRUE) {
    echo "creado";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>