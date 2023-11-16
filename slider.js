$.get('get_images.php', function(images) {

    var html = '';
    images.forEach(function(image){
       html += '<div><img src="'+image+'"></div>';
    });
  
    $('#slider').html(html);
  
    $('#slider').slick({
      slidesToShow: 1,
      autoplay: true
    });
  
  });
