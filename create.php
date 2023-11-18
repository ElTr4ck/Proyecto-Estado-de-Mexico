<?php

$sabor = $_GET['sabor'];
$desc = $_GET['Desc'];
$img = $_GET['img'];
$conexion = mysqli_connect("localhost", "root", '', "heladeria");
$insertar = "INSERT INTO helados (sabor, descripcion, imagen) VALUES ('$sabor','$desc','$img');";

if (mysqli_query($conexion, $insertar)) {
     // Importar SweetAlert2 
     echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
     // Incluir el script JavaScript separado y pasar el parámetro
     echo "<script src='assets/js/eliminar_confirm.js'></script>";
     sleep(5);
     header("Location: crud.php");
}

?>