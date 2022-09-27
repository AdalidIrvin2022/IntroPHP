<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_POST["nombredb"];

$nombreTabla=$_POST["nombreTabla"];
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];


// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "INSERT INTO $nombreTabla VALUES ($p1,$p2,$p3)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla modifica correctamente";
  } else {
    echo "Error al modificar la tabla " . $conn->error;
  }
  
  $conn->close();
?>