
<?php 

    session_start();
    if (!isset($_SESSION["usuario"])){
        session_destroy();
        header("Location: login.php");
        die; 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Sabores de Helados</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        /* Agregamos estilos para los colores y bordes */
        .newRow {
            background-color: blue;
            border: 1px solid purple;
        }
    </style>
</head>
<body>
    <h1>Editar Sabores de Helados</h1>
    <table id="iceCreamTable">
        <tr>
            <th>Sabor</th>
            <th>Precio</th>
        </tr>
       
        <tr class="newRow">
            <td><input type="text" id="flavor3" name="flavor3"></td>
            <td><input type="text" id="price3" name="price3"></td>
        </tr>
        <tr class="newRow">
            <td><input type="text" id="flavor3" name="flavor3"></td>
            <td><input type="text" id="price3" name="price3"></td>
        </tr>
        <tr class="newRow">
            <td><input type="text" id="flavor3" name="flavor3"></td>
            <td><input type="text" id="price3" name="price3"></td>
        </tr>
        <tr class="newRow">
            <td><input type="text" id="flavor3" name="flavor3"></td>
            <td><input type="text" id="price3" name="price3"></td>
        </tr>
        <tr class="newRow">
            <td><input type="text" id="flavor3" name="flavor3"></td>
            <td><input type="text" id="price3" name="price3"></td>
        </tr>
    </table>
    <button onclick="saveChanges()">Guardar Cambios</button>

    <script>
        function saveChanges() {
            // Aquí puedes agregar el código para guardar los cambios.
            // Esto podría implicar enviar los datos a un servidor o guardarlos en el almacenamiento local del navegador.
            alert("Cambios guardados (Cambios listos).");
        }
    </script>
</body>
</html>
