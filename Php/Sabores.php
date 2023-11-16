<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'nombre_de_usuario', 'contraseña', 'nombre_base_de_datos');

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Realizar una consulta SQL para obtener todos los helados
$sql = "SELECT sabor, precio FROM helados";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "Sabor: " . $row["sabor"]. " - Precio: $" . $row["precio"]. "<br>";
    }
} else {
    echo "No hay helados disponibles";
}

$conexion->close();
?>
