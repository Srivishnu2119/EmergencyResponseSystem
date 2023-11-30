$(document).ready(function(){

 "use strict";
 /*==============================================================
// toggler js
==============================================================*/

$("button.navbar-toggler").on('click', function(){
    $(".main-menu-area").addClass("active");
    $(".mm-fullscreen-bg").addClass("active");
    $("body").addClass("hidden");
});

$(".close-box").on('click', function(){
    $(".main-menu-area").removeClass("active");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

$(".mm-fullscreen-bg").on('click', function(){
    $(".main-menu-area").removeClass("active");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

/*==============================================================
  Newsletter Popup
==============================================================*/

$('#myModal1').modal('show');

/*==============================================================
// cart js
==============================================================*/

$(".shopping-cart a.cart-count").on('click', function(){
    $(".mini-cart").addClass("show");
    $(".mm-fullscreen-bg").addClass("active");
    $("body").addClass("hidden");
});

$(".shopping-cart-close").on('click', function(){
    $(".mini-cart").removeClass("show");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

$(".mm-fullscreen-bg").on('click', function(){
    $(".mini-cart").removeClass("show");
    $(".mm-fullscreen-bg").removeClass("active");
    $("body").removeClass("hidden");
});

/*==============================================================
// header sticky
==============================================================*/
  $(window).scroll(function() {
    var sticky = $('.header-main-area'),
    scroll = $(window).scrollTop();
    if (scroll >= 150) {
      sticky.addClass('is-sticky');
    }
    else {
      sticky.removeClass('is-sticky');
    }
  });
  
/*==============================================================
// home slider
==============================================================*/

$('.home-slider').owlCarousel({
    loop: false,
    items: 1,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

$('.home-slider2').owlCarousel({
    loop: true,
    items: 1,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

/*==============================================================
// Cipl Category image slider
==============================================================*/

$('.home-category-pavan').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    autoplay:false,
    responsive: {
        0: {
            items: 2,
            margin: 15
        },
        479: {
            items: 2,
            margin: 15
        },
        768: {
            items: 4
        },
        979: {
            items: 5
        },
        1199: {
            items: 6
        }
    }
});

/*==============================================================
// category image slider
==============================================================*/

$('.home-category-books').owlCarousel({
    loop: true,
    margin: 30,
    rewind: true,
    nav: false,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    autoplay:true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 3
        },
        979: {
            items: 4
        },
        1199: {
            items: 6
        }
    }
});

/*==============================================================
// category image slider
==============================================================*/

$('.home-category-e1').owlCarousel({
    loop: true,
    margin: 30,
    rewind: true,
    nav: true,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    autoplay:false,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 3
        },
        979: {
            items: 4
        },
        1199: {
            items: 6
        }
    }
});

/*==============================================================
// category image slider
==============================================================*/

$('.home-category-h1').owlCarousel({
    loop: true,
    margin: 30,
    rewind: true,
    nav: false,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: true,
    autoplaySpeed: 3500,
    autoplayHoverPause: true,
    autoplay:true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 3
        },
        979: {
            items: 4
        },
        1199: {
            items: 6
        }
    }
});


/*==============================================================
// category image slider
==============================================================*/

$('.home-category-tm1').owlCarousel({
    loop: true,
    margin: 30,
    rewind: true,
    nav: false,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: true,
    autoplaySpeed: 4000,
    autoplayHoverPause: true,
    autoplay:true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 3
        },
        979: {
            items: 4
        },
        1199: {
            items: 6
        }
    }
});


/*==============================================================
// category image slider
==============================================================*/

$('.home-category-te1').owlCarousel({
    loop: true,
    margin: 30,
    rewind: true,
    nav: false,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: true,
    autoplaySpeed: 4500,
    autoplayHoverPause: true,
    autoplay:true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 3
        },
        979: {
            items: 4
        },
        1199: {
            items: 6
        }
    }
});



/*==============================================================
// trending products slider
==============================================================*/

$('.trending-products').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    responsive: {
        0: {
            items: 2,
            margin: 15
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});



$('.grid-items').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});


/*==============================================================
//quick view slider
==============================================================*/

  $('.quick-slider').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    sautoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive:{
      0:{
        items:3
      },
      600:{
        items:3
      },
      1000:{
        items:4
      }
    }
  });


/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.swiper-container.home-pro-tab', {
    slidesPerView: 4,
    slidesPerColumn: 2,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        991: {
            slidesPerView: 3
        },
        1199: {
            slidesPerView: 4
        }
    }
});

/*==============================================================
// testimonials slider
==============================================================*/

$('.testi-m2').owlCarousel({
    loop: false,
    rewind: true,
    nav: true,
    dots:false,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1
        },
        768: {
            items: 1
        },
        979: {
            items: 2
        },
        1199: {
            items: 3
        }
    }
});

/*==============================================================
// testimonials slider
==============================================================*/

$('.testi-m1').owlCarousel({
    loop: false,
    rewind: true,
    nav: false,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});

/*==============================================================
// Cipl blog slider
==============================================================*/

$('.home-blog11').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay:true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 2
        },
        979: {
            items: 3
        },
        1199: {
            items: 4
        }
    }
});

/*==============================================================
// brand-logo slider
==============================================================*/

$('.brand-carousel').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    slideTransition: 'linear',
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        479: {
            items: 2
        },
        540: {
            items: 3
        },
        768: {
            items: 5
        },
        979: {
            items: 6
        },
        1199: {
            items: 6
        }
    }
});

/*==============================================================
// back to top js
==============================================================*/

$(window).on('scroll',function() {
    if ($(this).scrollTop() > 600) {
        $('#top').addClass('show');
    } else {
        $('#top').removeClass('show');
    }
});


$('#top').on('click',function() {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});

// **************************************** home-2********************************************

/*==============================================================
// trending products sliders
==============================================================*/

$('.home2-trending').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 4
        },
        1199:{
            items: 5
        }
    }
});

/*==============================================================
//category image
==============================================================*/

$('.home2-cate-image').owlCarousel({
    loop: true,
    rewind: true,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:2,
            margin: 15
        },
        479:{
            items:2,
            margin: 15
        },
        600:{
            items:3,
            margin: 15
        },
        768:{
            items:4,
            margin: 20
        },
        979:{
            items:5,
            margin: 20
        },
        1199:{
            items:7,
            margin: 20
        }
    }
});

/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.swiper-container.our-products-tab', {
    slidesPerView: 3,
    slidesPerColumn: 3,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 2,
            slidesPerColumn: 3
        }
    }
});

/*==============================================================
// testimonials slider
==============================================================*/

$('.home2-testi').owlCarousel({
    loop: false,
    rewind: true,
    nav: true,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});

/*==============================================================
// featured products slider
==============================================================*/

$('.featured').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 4
        },
        1199:{
            items: 5
        }
    }
});

/*==============================================================
// blog
==============================================================*/

$('.blog2').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 2,
            margin: 15
        },
        768: {
            items: 2
        },
        979: {
            items: 3
        },
        1199: {
            items: 4
        }
    }
});

// **************************************** home-3********************************************

/*==============================================================
// home slider
==============================================================*/

$('.home-slider3').owlCarousel({
    loop: false,
    items: 1,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-double-left"></i>','<i class="fa fa-angle-double-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.swiper-container.our-pro-tab', {
    slidesPerView: 4,
    slidesPerColumn: 1,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 3
        },
        1199: {
            slidesPerView: 4
        }
    }
});

/*==============================================================
// special products swiper
==============================================================*/

var swiper = new Swiper('.swiper-container.special-pro', {
    slidesPerView: 1,
    slidesPerColumn: 3,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        640: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        768: {
            slidesPerColumn: 3,
            slidesPerView: 2,
        },
        1024: {
            slidesPerColumn: 2
        }
    }
});

/*==============================================================
// testimonials slider
==============================================================*/

$('.testi-3').owlCarousel({
    loop: false,
    rewind: true,
    nav: false,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});

/*==============================================================
// deal of the day
==============================================================*/

$('.deal-day').owlCarousel({
    loop: false,
    rewind: true,
    nav: true,
    dots:false,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 2,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});

/*==============================================================
// trending products swiper
==============================================================*/

var swiper = new Swiper('.swiper-container.trening-left-pro', {
    slidesPerView: 1,
    slidesPerColumn: 3,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        640: {
            slidesPerColumn: 2,
            slidesPerView: 1,
        },
        768: {
            slidesPerColumn: 3,
            slidesPerView: 2,
        },
        1024: {
            slidesPerColumn: 2
        }
    }
});

/*==============================================================
// featured products slider
==============================================================*/

$('.featured-products-slider').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 3
        },
        1200:{
            items: 5
        }
    }
});

/*==============================================================
//brand
==============================================================*/

$('.home3-brand').owlCarousel({
    loop: false,
    rewind: true,
    margin: 0,
    nav: false,
    dots: false,autoplay: true,
    slideTransition: 'linear',
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:2
        },
        479:{
            items:3
        },
        768:{
            items:4
        },
        979:{
            items:2
        },
        1199:{
            items: 2
        }
    }
});

/*==============================================================
//blog
==============================================================*/

$('.home3-blog').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    lazyLoad:true,
    nav: false,
    dots: false,responsive:{
        0:{
            items:1,
            margin: 15
        },
        479:{
            items:2,
            margin: 15
        },
        768:{
            items:2
        },
        979:{
            items:2
        },
        1199:{
            items:3
        }
    }
});

// **************************************** home-4********************************************

/*==============================================================
// home slider
==============================================================*/

$('.home4-slider').owlCarousel({
    loop: false,
    items: 1,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.swiper-container.home4-tab', {
    slidesPerView: 5,
    slidesPerColumn: 2,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 4
        }
    }
});

/*==============================================================
//category image
==============================================================*/

$('.home4-cate').owlCarousel({
    loop: true,
    rewind: true,
    nav: true,
    margin:20,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:2,
            margin: 15
        },
        479:{
            items:3,
            margin: 15
        },
        768:{
            items:3,
        },
        979:{
            items:4,
        },
        1199:{
            items:5,
        }
    }
});

/*==============================================================
//home featured image
==============================================================*/

$('.home4-featured').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 4
        },
        1199:{
            items: 5
        }
    }
});

/*==============================================================
//brand slider
==============================================================*/

$('.home4-brand').owlCarousel({
    loop: false,
    rewind: true,
    margin: 0,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    slideTransition: 'linear',
    autoplaySpeed: 3000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:2
        },
        479:{
            items:3
        },
        768:{
            items:4
        },
        979:{
            items:4
        },
        1199:{
            items:5
        }
    }
});


// **************************************** home-5********************************************

/*==============================================================
//swiper slider
==============================================================*/

var swiper = new Swiper('.home5-slider', {
    slidesPerColumn: 1,
    slidesPerView: 1,
    dots: false,
    effect: 'fade',
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + '0' + (index + 1) + '</span>';
        },
    }
});

/*==============================================================
//category image slider
==============================================================*/

$('.home5-cate-image').owlCarousel({
    loop: true,
    rewind: true,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:2,
            margin: 5
        },
        479:{
            items:3,
            margin: 5
        },
        768:{
            items:4,
            margin: 20
        },
        979:{
            items:5,
            margin: 20
        },
        1199:{
            items:6,
            margin: 20
        }
    }
});

/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.swiper-container.home5-tab', {
    slidesPerView: 4,
    slidesPerColumn: 2,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        prevEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 4
        }
    }
});

/*==============================================================
//featured
==============================================================*/

$('.featured5-pro').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 4
        },
        1199:{
            items: 4
        }
    }
});

/*==============================================================
// blog
==============================================================*/

$('.blog5').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 2,
            margin: 15
        },
        768: {
            items: 2
        },
        979: {
            items: 3
        },
        1199: {
            items: 3
        }
    }
});


// **************************************** home-6********************************************

/*==============================================================
// home slider
==============================================================*/

$('.home6-slider').owlCarousel({
    loop: false,
    items: 1,
    rewind: true,
    margin: 0,
    nav: true,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

/*==============================================================
//category
==============================================================*/

$('.cate-6').owlCarousel({
    loop: false,
    rewind: true,
    nav: true,
    margin: 0,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,autoplay: false,
    responsive:{
        0:{
            items:1,
        },
        479:{
            items:2
        },
        768:{
            items:2
        },
        979:{
            items:3
        },
        1199:{
            items:4
        }
    }
});

/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.swiper-container.home6-tab', {
    slidesPerView: 5,
    slidesPerColumn: 2,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 4
        }
    }
});

/*==============================================================
// testimonials slider
==============================================================*/

$('.testi-6').owlCarousel({
    loop: false,
    rewind: true,
    nav: false,
    margin: 30,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        479: {
            items: 1,
        },
        768: {
            items: 2
        },
        979: {
            items: 2
        },
        1199: {
            items: 3
        }
    }
});


/*==============================================================
//featured product
==============================================================*/

$('.home6-featured').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    lazyLoad:true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 3,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 4
        },
        1199:{
            items: 5
        }
    }
});

/*==============================================================
// blog slider
==============================================================*/

$('.blog-6').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 2,
            margin: 15
        },
        768: {
            items: 2
        },
        979: {
            items: 3
        },
        1199: {
            items: 4
        }
    }
});

// **************************************** home-7********************************************

/*==============================================================
// home slider
==============================================================*/

$('.home-slider7').owlCarousel({
    loop: false,
    items: 1,
    margin: 0,
    nav: true,
    dots: false,
    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    fade: true,
    transitionStyle: "fade",
    animateOut: 'fadeOut',
    animateIn: 'fadeIn'
});

/*==============================================================
//category
==============================================================*/

$('.cate-7').owlCarousel({
    loop: true,
    rewind: true,
    nav: false,
    margin: 60,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,autoplay: false,
    responsive:{
        0:{
            items:1,
        },
        479:{
            items:1
        },
        768:{
            items:2,
            margin: 30
        },
        979:{
            items:2,
            margin: 30
        },
        1199:{
            items:3,
            margin: 30
        }
    }
});

/*==============================================================
// swiper product-tab slider
==============================================================*/

var swiper = new Swiper('.home-7-tab', {
    slidesPerColumn: 2,
    slidesPerView: 4,
    spaceBetween: 30,
    observer: true,
    observeParents: true,navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 15
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    },
});

/*==============================================================
//special
==============================================================*/

$('.special-7').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    lazyLoad:true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,
    autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items: 2,
            margin: 15
        },
        479:{
            items: 2,
            margin: 15
        },
        768:{
            items: 3
        },
        979:{
            items: 3
        },
        1199:{
            items: 4
        }
    }
});

/*==============================================================
//Blog
==============================================================*/

$('.blog-7').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    lazyLoad:true,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1,
            margin: 15,
        },
        479: {
            items: 2,
            margin: 15,
        },
        768: {
            items: 2
        },
        979: {
            items: 3
        },
        1199: {
            items: 4
        }
    }
});

// **************************************** About page********************************************



/* ========================================== 
  Minus and Plus Btn Height
  ========================================== */

  $('.minus-btn,.minus-btn-1').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val(),10);

    if (value > 1) {
      value = value - 1;
    } else {
      value = 0;
    }
    $input.val(value);
  });

  $('.plus-btn,.plus-btn-1').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val(),10);

    if (value < 100) {
      value = value + 1;
    } else {
      value =100;
    }
    $input.val(value);
  });

// **************************************** product page ********************************************

    
  /* ========================================== 
  //additional
  ========================================== */
  
//     $('.pro-page-slider').owlCarousel({
//         loop: true,
//         margin: 15,
//         nav: false,
//         dots: false,
//         responsive:{
//           0:{
//             items:1
//           },
//           600:{
//             items:1
//           },
//           1000:{
//             items:1
//           }
//         }
//   });

    $('.pro-pag-5-slider').owlCarousel({
        loop: false,
        margin: 15,
        nav: false,dots: false,
        responsive:{
          0:{
            items:3
          },
          600:{
            items:3
          },
          1000:{
            items:3
          }
        }
    });


    $('.pro-page .nav-item .nav-link').on( "click", function() {

        $('.pro-page .nav-item .nav-link').removeClass('active');
        $(this).addClass('active');

    });

  /* ========================================== 
   //related product
  ========================================== */


  $('.releted-products').owlCarousel({
  loop: false,
  rewind: true,
  margin: 30,
  nav: false,
  dots: false,
  autoplay: true,
  sautoplayTimeout: 5000,
  autoplayHoverPause: true,
  responsive:{
    0:{
      items:1,
      margin: 15
    },
    480:{
      items: 2
    },
    768:{
      items: 3
    },
    979:{
      items: 4
    },
    1200:{
      items: 5
    }
  }
});  

   /* ========================================== 
   // index 7
  ========================================== */

  $('.releted-products-7').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    dots: false,autoplay: true,
    sautoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive:{
      0:{
        items:2,
        margin: 15
      },
      480:{
        items:2
      },
      768:{
        items:2
      },
      979:{
        items:3
      }
    }
  });

// **************************************** blog page ********************************************

$('.single-image-carousel').owlCarousel({
    loop: false,
    rewind: true,
    nav: false,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        479: {
            items: 1,
            margin: 15
        },
        768: {
            items: 1
        },
        979: {
            items: 1
        },
        1199: {
            items: 1
        }
    }
});

/* ========================================== 
   //blog
  ========================================== */

$('.details-blog-carousel').owlCarousel({
    loop: false,
    rewind: true,
    margin: 30,
    lazyLoad:true,
    nav: false,
    dots: false,
    // autoplay: true,
    // autoplayTimeout: 2000,
    // autoplayHoverPause: true,
    responsive:{
        0:{
            items:1,
            margin: 15
        },
        479:{
            items:2,
            margin: 20
        },
        768:{
            items:2
        },
        979:{
            items:3
        },
        1199:{
            items:3
        }
    }
});




});

function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}
