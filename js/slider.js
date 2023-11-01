$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        rtl: false,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 3
            },
            768: {
                items: 5
            },
            992: {
                items: 8
            }
        }
    });

});