$(document).ready(function() {
  // Verificar si el elemento #slider existe en la página
  if ($('#slider').length > 0) {
    // Obtener las imágenes desde PHP
    $.ajax({
      url: 'get_images.php',
      dataType: 'json',
      success: function(images) {
        console.log(images);

        // Verificar si images es un array
        if ($.isArray(images) && images.length > 0) {
          // Construir el HTML para las imágenes
          var html = '';
          images.forEach(function(image) {
            html += '<div class="swiper-slide"><div class="swiper-txt"><h3>Arreglo Aqui</h3><p>Arreglo aqui</p></div><img src="assets/img/carrusel/' + image + '" alt=""></div> ';
            //html += '<div class="carousel-item"><img src="assets/img/carrusel/' + image + '"></div>';
          });

          // Insertar HTML en #slider
          $('#slider').html(html);


          // Inicializar el carrusel de Materialize con opciones personalizadas
          /*
          $('.carousel').carousel({
            fullWidth: true, // Ajusta el ancho al tamaño de la pantalla
            indicators: true,
            duration: 2000, // Ajusta la duración de cada diapositiva
            shift: 50, // Ajusta la cantidad de desplazamiento entre diapositivas
            numVisible: 5, // Ajusta el número de diapositivas visibles a la vez
            padding: 600, // Agrega un relleno adicional para centrar las imágenes
          });*/

          // Inicia la función de cambio automático cada 5 segundos
          setInterval(function() {
            $('.carousel').carousel('next');
          }, 2000);

        } else {
          console.log("La respuesta del servidor no es un array de imágenes válido o está vacío.");
        }
      },
      error: function() {
        console.log("Error al cargar las imágenes desde el servidor");
      }
    });
  } else {
    console.log("Elemento #slider no encontrado en la página");
  }
});

