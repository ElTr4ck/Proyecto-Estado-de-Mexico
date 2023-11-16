<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="nombre_usuario">Nombre de usuario:</label><br>
        <input type="text" id="nombre_usuario" name="nombre_usuario"><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena"><br>
        <input type="submit" value="Iniciar sesión">
    </form>

<?php 

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexión a la base de datos
        $mysqli = new mysqli("localhost", "root", "", "Usuarios");

        // Verificar la conexión
        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }
        session_start();

        // Valores de entrada
        $in_username = $_POST["nombre_usuario"];
        $in_password = $_POST["contrasena"];

        // Llamar al procedimiento almacenado
        $mysqli->query("CALL validar_usuario('$in_username', '$in_password', @resultado)");

        // Obtener el resultado
        $result = $mysqli->query("SELECT @resultado as resultado");
        $row = $result->fetch_assoc();
        $id_usuario = $row['resultado'];

        // Verificar si el inicio de sesión es válido
        if ($id_usuario !== null && $id_usuario !== 0) {
            echo "Inicio de sesión exitoso. ID de usuario: " . $id_usuario;
            // Puedes redirigir al usuario a la página de inicio o realizar otras acciones necesarias.
            $_SESSION['usuario'] = $in_usuario;
        } else {
            echo "Credenciales inválidas. Inicio de sesión fallido.";
        }

        // Cerrar la conexión
        $mysqli->close();
    }
    
    ?>

</body>
</html>