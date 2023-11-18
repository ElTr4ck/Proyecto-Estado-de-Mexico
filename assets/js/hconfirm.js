function confirmarEliminacion(sabor) {
  Swal.fire({
    title: 'Agregado',
    text: 'El registro ha sido agregado correctamente.',
    icon: 'success',
    showConfirmButton: false, // Oculta el botón de confirmación
    timer: 2000
});

// Redirige a la página de eliminación
window.location.href = 'create.php?sabor=' + sabor;
}
