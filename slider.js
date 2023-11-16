$.get('get_images.php', function(images) {

    var html = '';
    images.forEach(function(image){
        var imgPath = 'img/' + image; 
       html += '<div><img src="'+image+'"></div>';
    });
  
    $('#slider').html(html);
  
    $('#slider').slick({
      slidesToShow: 1,
      autoplay: true
    });
  
  });
