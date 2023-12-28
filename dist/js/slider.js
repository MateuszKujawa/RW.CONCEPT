$(document).ready(function() {
    const owl = $('.owl-carousel');

    const imagesArr = [
        "./images/partners_images/adbl.webp",
        "./images/partners_images/addco.webp",
        "./images/partners_images/adrenaline.webp",
        "./images/partners_images/aem.webp",
        "./images/partners_images/ate.webp",
        "./images/partners_images/autogauge.webp",
        "./images/partners_images/autosol.webp",
        "./images/partners_images/bimarco.webp",
        "./images/partners_images/bosh.webp",
        "./images/partners_images/carpro.webp",
        "./images/partners_images/cleantle.webp",
        "./images/partners_images/colinite.webp",
        "./images/partners_images/colorluc.webp",
        "./images/partners_images/cosworth.webp",
        "./images/partners_images/d1spec.webp",
        "./images/partners_images/ebcbrakes.webp",
        "./images/partners_images/eibach.webp",
        "./images/partners_images/febib.webp",
        "./images/partners_images/ferodo.webp",
        "./images/partners_images/fresso.webp",
        "./images/partners_images/FXprotect.webp",
        "./images/partners_images/garrette.webp",
        "./images/partners_images/goodstuff.webp",
        "./images/partners_images/greddy.webp",
        "./images/partners_images/gyeon.webp",
        "./images/partners_images/hks.webp",
        "./images/partners_images/honeycombination.webp",
        "./images/partners_images/jdgattack.webp",
        "./images/partners_images/kn.webp",
        "./images/partners_images/kochchemie.webp",
        "./images/partners_images/kyb.webp",
        "./images/partners_images/logcite.webp",
        "./images/partners_images/lqmolly.webp",
        "./images/partners_images/ls2.webp",
        "./images/partners_images/luk.webp",
        "./images/partners_images/manfilter.webp",
        "./images/partners_images/mannol.webp",
        "./images/partners_images/maxtonlogo.webp",
        "./images/partners_images/momo.webp",
        "./images/partners_images/monstershine.webp",
        "./images/partners_images/motul.webp",
        "./images/partners_images/nielsen.webp",
        "./images/partners_images/nolan.webp",
        "./images/partners_images/nos.webp",
        "./images/partners_images/nx.webp",
        "./images/partners_images/omp.webp",
        "./images/partners_images/osram.webp",
        "./images/partners_images/philips.webp",
        "./images/partners_images/proline.webp",
        "./images/partners_images/recaro.webp",
        "./images/partners_images/rrs.webp",
        "./images/partners_images/tec2000.webp",
        "./images/partners_images/shark.webp"
    ];

    owl.owlCarousel({
        rtl: false,
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: false,
        smartSpeed: 2000,
        responsive: {
          0: {
            items: 3
          },
          768: {
            items: 5
          },
          992: {
            items: 6
          },
          1220: {
            items: 8
          },
          1600: {
            items: 10
          }
        }
      });

    // Add elements in slider
    for (let i = 0; i < imagesArr.length; i++) {
        const logoDiv = $('<div class="single-logo w-[150px] h-[150px] md:w-[200px] md:h-[200px]"></div>');
        const logoImg = $('<img>').attr('src', imagesArr[i]).attr('alt', 'partnerzy logo').addClass('rounded-lg');
        logoDiv.append(logoImg);
        owl.trigger('add.owl.carousel', [logoDiv]);
    }

    owl.trigger('refresh.owl.carousel'); // Refresh the carousel after add elements.
});