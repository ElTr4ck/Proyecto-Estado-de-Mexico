<?php
session_start();

$_SESSION['crudAdmin'] = true;

$usuario = $_SESSION['username'];
if($usuario==null|| $usuario=''){
  
  header('Location: index.html');
  echo '<link href="assets/css/loginStyle.css" rel="stylesheet">
  <b class="error-acceso">Usted no tiene autorización<b>';
}

$conexion = mysqli_connect('localhost', 'root', '', 'heladeria');
    if (!$conexion) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu administrador</title>
</head>
<body>
  <table style="border:1px solid;">
    <tr><th>Menú Administrador</th></tr>
    <tr>
      <td>Sabor</td>
      <td>Descripción</td>
      <td>Foto</td>
    </tr>
      <?php
     $consulta="SELECT * FROM helados";

     $resultado=mysqli_query($conexion, $consulta);
     //mientras encuentre elementos del arreglo, se va llenando la tabla
     while($show=mysqli_fetch_array($resultado)){
      ?>
      <tr>
        <td><?php echo $show['sabor']?></td>
        <td><?php echo $show['descripcion']?></td>
        <td><?php echo $show['imagen']?></td>
        <td><a href="eliminar.php?sabor=<?php echo $show['sabor'];?>"> X </a></td>
    </tr>
    <?php
     }
    
    ?>
  </table>

  <a href="crate.html">Añadir helado</a>
</body>


</html>

