<?php
$servername = "localhost";
$username = "Heladeria";
$password = "1234";
$dbname = "Heladeria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("La conexión falló: " . $conn->connect_error);
}

//
$mysqli->query("CALL validar_usuario('$in_username', '$in_password', @resultado)");
$result = $mysqli->query("SELECT @resultado as resultado");
$row = $result->fetch_assoc();
$id_usuario = $row['resultado'];
if ($id_usuario !== null && $id_usuario !== 0) {
  echo "Inicio de sesión exitoso. ID de usuario: " . $id_usuario;
} else {
  echo "Credenciales inválidas. Inicio de sesión fallido.";
}

$conn->close();
?>
