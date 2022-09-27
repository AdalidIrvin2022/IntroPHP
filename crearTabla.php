<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_POST["nombredb"];
$tabla = $_POST["nombreTabla"];
$llaveP=$_POST["llave"];
$parametro1=$_POST["p1"];
$parametro2=$_POST["p2"];
$parametro3=$_POST["p3"];


// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "CREATE TABLE $tabla(
    $llaveP INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    $parametro1 INT(6) NOT NULL,
    $parametro2 VARCHAR(12),
    $parametro3 VARCHAR(12)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla creada correctamente";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();
?>