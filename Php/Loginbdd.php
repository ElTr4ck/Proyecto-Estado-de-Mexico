<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'nombre_de_usuario', 'contraseña', 'usuarios');

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Comprobar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Buscar al usuario en la base de datos
    $sql = "SELECT contrasena FROM usuarios WHERE nombre_usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('s', $nombre_usuario);
    $stmt->execute();
    $stmt->bind_result($contrasena_hash);
    $stmt->fetch();

    // Verificar la contraseña
    if (password_verify($contrasena, $contrasena_hash)) {
        echo "¡Inicio de sesión exitoso!";
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
    }

    $stmt->close();
}

$conexion->close();
?>

<!-- Formulario de inicio de sesión -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Nombre de usuario: <input type="text" name="nombre_usuario">
  Contraseña: <input type="password" name="contrasena">
  <input type="submit">
</form>
