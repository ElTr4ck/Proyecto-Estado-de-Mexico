<?php
require 'logica/conexion.php';
session_start();

$usuario = $_POST['userAdmin'];
$clave = $_POST['passAdmin'];

$q = "SELECT COUNT(*) as contar from Admin where nombreAdmin = '$usuario' and contra='$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
$_SESSION['username']= $usuario;
header("location: crud.php");
}else{
    $_SESSION['accesoDenegado'] = true;
    header("location: adminLogin.php");
}
?>


