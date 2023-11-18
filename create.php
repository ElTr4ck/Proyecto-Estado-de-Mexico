<?php

$sabor = $_GET['sabor'];
$desc = $_GET['Desc'];
$img = $_GET['img'];
$conexion = mysqli_connect("localhost", "root", '', "heladeria");
$insertar = "INSERT INTO helados (sabor, descripcion, imagen) VALUES ('$sabor','$desc','$img');";
if (mysqli_query($conexion, $insertar)) {
    // Sweet Alert de confirmación exitosa
    echo '<script src="assets/js/heladoconfirm.js"></script>';

    // Redirección a crud.php
    header("Location: crud.php");
}

?>