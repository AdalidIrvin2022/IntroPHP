<?php
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "dbtrabajadores";

// Creando la conexion
$conn = new mysqli($servername, $username, $password);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// Consulta para crear la base de datos
$sql = "CREATE DATABASE dbPrueba070922";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada correctamente";
} else {
  echo "Error al crear: " . $conn->error;
}

$conn->close();
?>