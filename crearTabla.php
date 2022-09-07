<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbprueba070922";

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "CREATE TABLE persona(
    id_persona INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ci INT(6) NOT NULL,
    nombre VARCHAR(12),
    apellidoP VARCHAR(12)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>