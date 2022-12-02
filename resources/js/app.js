$(document).ready(function () {
  $('#nav-toggler').click(function () {
    $('#navbar-nav').toggleClass('hidden')
  })

  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,

    autoplay: true,
    autoplayTimeout:8000,
    autoplayHoverPause:true,
    
    dots: true,
    dotsContainer: '.owl-dots',
    responsive:{
        0:{
            items:1,
        },
    }
  })
})
