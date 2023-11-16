<?php

// Conexión a la BD
$conn = mysqli_connect("localhost", "root", "", "Heladeria");
// Verificar la conexión
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}
// Consulta para obtener las imágenes
$sql = "SELECT imagen FROM helados";
$result = mysqli_query($conn, $sql);
// Verificar si la consulta fue exitosa
if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}
// Armar arreglo con las imágenes
$images = array();
while ($row = mysqli_fetch_assoc($result)) {
    $images[] = "img/" . $row['imagen'];
}
// Cerrar la conexión
mysqli_close($conn);
// Enviar como JSON
echo json_encode($images);
?>
