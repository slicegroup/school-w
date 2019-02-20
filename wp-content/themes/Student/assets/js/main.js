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
  autoplaySpeed: 3000,

  
});

// slider popular product
$('.product-popular').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: true,
  dots: true,
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
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
// PRODUCT SHOW SLIDER

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav',
	 autoplay: false
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true

});
		

 // Header scroll class
 $(window).scroll(function() {
  if ($(this).scrollTop() > 10) {
    $('#header').addClass('header-scrolled');
    // $('#school')addClass('top-fix') ;
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

// menu
var $burguer = document.getElementById('burguer');
var $menu = document.getElementById('menu_xs');
var $squeeze = document.getElementById('squeeze');
// var $hamburger = document.querySelectorAll(".hamburger");
function toggleMenu(){
  $menu.classList.toggle('active');
  $squeeze.classList.toggle('is-active');
};
$burguer.addEventListener('click',toggleMenu);

// buscador

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


// carrito check

$('.buy').click(function(){
  $(this).closest('.bottom').addClass('clicked');
});


// js de add llist

var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(el.parent().children(".price").html());
  var eq = Math.round(price * qt * 100) / 100;
  
  el.parent().children(".full-price").html( eq + "$" );
  
  changeTotal();			
}

function changeTotal() {
  
  var price = 0;
  
  $(".full-price").each(function(index){
    price += parseFloat($(".full-price").eq(index).html());
  });
  
  price = Math.round(price * 100) / 100;
  var tax = Math.round(price * 0.05 * 100) / 100
  var shipping = parseFloat($(".shipping span").html());
  var fullPrice = Math.round((price + tax + shipping) *100) / 100;
  
  if(price == 0) {
    fullPrice = 0;
  }
  
  $(".subtotal span").html(price);
  $(".tax span").html(tax);
  $(".total span").html(fullPrice);
}

$(document).ready(function(){
  
  $(".remove").click(function(){
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(
      function(){
        el.parent().parent().slideUp('fast', function() { 
          el.parent().parent().remove(); 
          if($(".product").length == 0) {
            if(check) {
              $("#cart").html("<h1>tal cosa</h1>");
            } else {
              $("#cart").html("<h1>No products!</h1>");
            }
          }
          changeTotal(); 
        });
      }, 200);
  });
  
  $(".qt-plus").click(function(){
    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
    
    $(this).parent().children(".full-price").addClass("added");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
  });
  
  $(".qt-minus").click(function(){
    
    child = $(this).parent().children(".qt");
    
    if(parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
    }
    
    $(this).parent().children(".full-price").addClass("minused");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
  });
  
  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
  
  $(".btn").click(function(){
    check = true;
    $(".remove").click();
  });
});




$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav',
  autoplay: false,
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true,

});

// slider relacionado
$(document).ready(function(){
  $('.relacionados').slick({
    slidesToShow: 3,
    dots:true,
    centerMode: true,
  // autoplay:true,
});
});