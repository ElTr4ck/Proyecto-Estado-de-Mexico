<?php

// Conexión a la BD
$conn = mysqli_connect("localhost", "root", "", "Heladeria");

// Verificar la conexión
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}


$sql = "SELECT imagen, sabor, descripcion FROM helados";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}

$images = array();
$sabores = array();
$descripciones = array();

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array(
        "imagen" => $row['imagen'],
        "sabor" => $row['sabor'],
        "descripcion" => $row['descripcion']
    );
}

// Cerrar la conexión
mysqli_close($conn);
header('Content-Type: application/json');
echo json_encode($data);
?>