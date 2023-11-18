document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('formContratacion');

  form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      showValidationAlert();
    } else {
      // Aquí envía el formulario si los datos son válidos
      form.submit();
    }
  });

  const showValidationAlert = () => {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Por favor, completa todos los campos correctamente',
      
    });
  };
});
