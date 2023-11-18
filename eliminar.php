<?php
$conexion = mysqli_connect("localhost", "root", "", "heladeria");
$id = $_GET['sabor'];
$delhe = "DELETE FROM helados where sabor='$id'";
$operacion = mysqli_query($conexion, $delhe);

if ($operacion) {
    // Importar SweetAlert2 
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    // Incluir el script JavaScript separado y pasar el parámetro
    echo "<script src='assets/js/eliminar_confirm.js'></script>";
    sleep(5);
    header("Location: crud.php");
}
?>
