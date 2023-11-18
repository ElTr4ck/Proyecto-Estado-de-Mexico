<?php
$conexion = mysqli_connect('localhost', 'root','', 'heladeria');

if($conexion){

echo "Conexion exitosa a la Base de Datos";}

else{
	echo "Conexion erronea";
}

?>