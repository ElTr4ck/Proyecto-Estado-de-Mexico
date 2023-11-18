// sweetAlert.js
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').addEventListener('submit', function (e) {
      e.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada
  
      // Aquí puedes agregar Sweet Alert
      Swal.fire({
        title: 'Añadido exitosamente',
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        // Redirige a crud.php después de hacer clic en "Aceptar"
        if (result.isConfirmed) {
          window.location.href = 'crud.php';
        }
      });
    });
  });
  