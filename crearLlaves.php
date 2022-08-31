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
$sql = "ALTER TABLE turno
ADD CONSTRAINT FK_Turno_Trabajador
FOREIGN KEY (id_trabajador) REFERENCES trabajador(id_trabajador)";

if ($conn->query($sql) === TRUE) {
  echo "Clave creada correctamente";
} else {
  echo "Error al crear la clave: " . $conn->error;
}

$conn->close();
?>