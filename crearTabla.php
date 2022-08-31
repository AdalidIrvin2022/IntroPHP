<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtrabajadores";

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "CREATE TABLE turno(
    id_turno INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_trabajador INT(6) NOT NULL,
    turno VARCHAR(15) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>