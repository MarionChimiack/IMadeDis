jQuery( document ).ready(function() {

  jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:50,
    stagePadding: 50,
    center: true,
    dotsEach: false,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

});
