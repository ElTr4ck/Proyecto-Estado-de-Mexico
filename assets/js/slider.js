$(document).ready(function() {
  if ($('#slider').length > 0) {
      $.ajax({
          url: 'get_images.php',
          dataType: 'json',
          success: function(data) {
              console.log(data);

              if ($.isArray(data) && data.length > 0) {
                  var html = '';
                  data.forEach(function(item) {
                      html += '<div class="swiper-slide"><div class="swiper-txt"><h3>Helado de ' + item.sabor + '</h3><p>' + item.descripcion + '</p></div><img src="assets/img/carrusel/' + item.imagen + '" alt=""></div>';
                  });

                  $('#slider').html(html);
                  console.log(html);
                  
              } else {
                  console.log("La respuesta del servidor no es un array válido o está vacío.");
              }
          },
          error: function() {
              console.log("Error al cargar los datos desde el servidor");
          }
      });
  } else {
      console.log("Elemento #slider no encontrado en la página");
  }
});

