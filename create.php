<!-- crate.php -->
<body>
  <form action="create.php" method="GET">
    <fieldset>
      <legend>Registrar Helado</legend>
      <label for="sabor">Sabor Helado:</label>
      <input type="text" id="sabor" name="sabor">
      <label for="Desc">Descripción</label>
      <input type="text" id="Desc" name="Desc">
      <label for="img">Imagen</label>
      <input type="text" id="img" name="img">
      <input type="submit" value="Enviar">
    </fieldset>
  </form>

  <!-- Agrega la referencia al script de Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetAlert.js"></script>
</body>
