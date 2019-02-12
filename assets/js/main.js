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
  autoplay: true,
  autoplaySpeed: 3000,
  
});

// slider popular product
$('.product-popular').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  // dots: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
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




// scroll

// scroll
$(".bajar").click(function (event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top - 0
    }, 1200, function () {
      window.location.hash = hash
    })
  }
})



// buscador
// Quick proof of concept
// Would like to make CSS only

var searchWrapper = document.querySelector('.search-wrapper'),
searchInput = document.querySelector('.search-input');

document.addEventListener('click', function (e) {
  if (~e.target.className.indexOf('search')) {
    searchWrapper.classList.add('focused');
    searchInput.focus();
  } else {
    searchWrapper.classList.remove('focused');
  }
});

