// confi slider bnner
$('.slider').slick({
  draggable: true,
  arrows: false,
  dots: true,
  autoplay:true,
  fade: true,
  speed: 900,
  infinite: true,
  cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
  // touchThreshold: 100
});

// slider productos

$('.category').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
});

// slider popular product
$('.product-popular').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
});

 // Header scroll class
 $(window).scroll(function() {
  if ($(this).scrollTop() > 10) {
    $('#header').addClass('header-scrolled');
  }
  
  else {
    $('#header').removeClass('header-scrolled');
    $('#header').removeClass('container');
  }
});


