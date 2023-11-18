// Importar SweetAlert2
import Swal from 'sweetalert2';

// Cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {

  // Seleccionar el formulario
  const form = document.querySelector('form');

  // Escuchar el submit del formulario
  form.addEventListener('submit', e => {

    // Prevenir submit default
    e.preventDefault();
      Swal.fire({
        title: 'Añadido exitosamente',
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Aceptar'
      });
    });
});