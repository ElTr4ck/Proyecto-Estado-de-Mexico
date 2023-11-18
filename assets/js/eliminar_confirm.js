function confirmarEliminacion(sabor) {
    // Muestra una alerta SweetAlert de confirmación
    Swal.fire({
        title: '¿Estás seguro?',
        text: '¡No podrás revertir esto!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminarlo'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Eliminado',
                text: 'El registro ha sido eliminado correctamente.',
                icon: 'success',
                showConfirmButton: false, // Oculta el botón de confirmación
                timer: 2000 
            })
            // Redirige a la página de eliminación
            window.location.href = 'eliminar.php?sabor=' + sabor;
        }
    });
}

