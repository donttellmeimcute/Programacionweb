<?php
$server = "localhost";
$username = "root";
$password = "toor";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];
$nacido = $_POST['nacido'];

$sql = "INSERT INTO MyGuests (nombre, correo, telefono, contrasena, nacido)
VALUES ('$nombre', '$correo', '$telefono', '$contrasena', '$nacido')";

if ($conn->query($sql) === TRUE) {
    echo "creado";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>