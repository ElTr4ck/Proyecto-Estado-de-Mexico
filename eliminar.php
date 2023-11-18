<?php
    $conexion=mysqli_connect("localhost", "root",'',"heladeria");
    $id=$_GET['sabor'];
    $delhe="DELETE FROM helados where sabor='$id'";
    
    $operacion=mysqli_query($conexion,$delhe);
    if($operacion )
    {
        header("Location: crud.php?function=add&id_pag=1");
    }
?>