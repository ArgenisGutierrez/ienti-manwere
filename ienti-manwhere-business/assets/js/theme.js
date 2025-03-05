$(document).ready(function(){

    // Mobile Menu
    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu",
        onePage: false,
    }); 
          //Counter Up
   $('.counter').counterUp({
     time: 1500
   });



    // Progress Bar
  if($('.progress-line').length) {
    $('.progress-line').appear(function(){
        var el = $(this);
        var percent = el.data('width');
        $(el).css('width', percent+'%');
     }, {accY: 0});
    }



    /*---------------------
    Nivo Slider active js
    --------------------- */
    $('#mainSlider').nivoSlider({
        directionNav: true,
        animSpeed: 500,
        slices: 18,
        pauseTime: 5000,
        pauseOnHover: false,
        controlNav: true,
        prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
        nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
     });
    // Brand Active
    $('.slider-carousel').owlCarousel({
         loop: true,
         autoplay: false,
         autoplayTimeout: 6000,
         smartSpeed:1500,
         dots: false,
         dotsEach: false,
         nav:true,
         navText: [" <i class='flaticon-long-arrow-pointing-to-left'></i>" , "<i class='flaticon-long-arrow-pointing-to-the-right'></i>"],
         responsive: {
             0: {
                 items: 1
             },
             768: {
                 items: 1
             },
             992: {
                 items: 1
             },
             1000: {
                 items: 1
             },
             1199: {
                 items: 1
             },
             1920: {
                 items: 1
            }
        }
    });

        // Brand Active
    $('.slider-list').owlCarousel({
         loop: true,
         autoplay: false,
         autoplayTimeout:4000,
         smartSpeed:1500,
         dots:true,
         dotsEach:true,
         nav:false,
         navText: [" <i class='fas fa-angle-left'></i>" , "<i class='fas fa-angle-right'></i>"],
         responsive: {
             0: {
                 items: 1
             },
             768: {
                 items: 1
             },
             992: {
                 items: 1
             },
             1000: {
                 items: 1
             },
             1199: {
                 items: 1
             },
             1920: {
                 items: 1
            }
        }
    });
      //about //
$('.about_list').owlCarousel({
        loop: true,
        autoplay:true,
        smartSpeed:2500,
        autoplayTimeout:4000,
        dots:true,
        dotsEach:true,
        nav:false,
        navText: ["<i class='flaticon-left-arrow-3''></i>", "<i class='flaticon-right-arrow-3''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1000: {
                items: 2
            },
             1365: {
                items:2
            },
             1500: {
                items:2
            },
            1920: {
                items:2 
              }
        }
    });
      // testi //
$('.testi_list').owlCarousel({
        loop: true,
        autoplay:true,
        smartSpeed:2500,
        autoplayTimeout:4000,
        dots:true,
        dotsEach:true,
        nav:false,
        navText: ["<i class='flaticon-left-arrow-3''></i>", "<i class='flaticon-right-arrow-3''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1000: {
                items: 2
            },
             1365: {
                items:3
            },
             1500: {
                items:3
            },
            1920: {
                items:3
              }
        }
    });

          // testi //
$('.testi_list2').owlCarousel({
        loop: true,
        autoplay:true,
        smartSpeed:2500,
        autoplayTimeout:4000,
        dots:true,
        dotsEach:true,
        nav:false,
        navText: ["<i class='flaticon-left-arrow-3''></i>", "<i class='flaticon-right-arrow-3''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1000: {
                items: 1
            },
             1365: {
                items:1
            },
             1500: {
                items:1
            },
            1920: {
                items:1
              }
        }
    });



    // Brand Active
    $('.brand_list').owlCarousel({
         loop: true,
         autoplay:true,
         autoplayTimeout: 6000,
         smartSpeed:1500,
         dots: false,
         dotsEach: false,
         nav:true,
         navText: [" <i class='fas fa-long-arrow-alt-left'><span>01</span>" , " <span>02</span><i class='fas fa-long-arrow-alt-right'></i>"],
         responsive: {
             0: {
                 items:1
             },
             768: {
                 items: 3
             },
             992: {
                 items: 4
             },
             1000: {
                 items: 4
             },
             1199: {
                 items: 5
             },
             1920: {
                 items: 5
            }
        }
    });
            // Brand Active
    $('.resent_list').owlCarousel({
         loop: true,
         autoplay: false,
         autoplayTimeout:4000,
         smartSpeed:1500,
         dots:true,
         dotsEach:true,
         nav:false,
         navText: [" <i class='fas fa-angle-left'></i>" , "<i class='fas fa-angle-right'></i>"],
         responsive: {
             0: {
                 items: 1
             },
             768: {
                 items: 1
             },
             992: {
                 items: 1
             },
             1000: {
                 items: 1
             },
             1199: {
                 items: 1
             },
             1920: {
                 items: 1
            }
        }
    });

          //about //
$('.blog_list').owlCarousel({
        loop: true,
        autoplay:true,
        smartSpeed:2500,
        autoplayTimeout:4000,
        dots:true,
        dotsEach:true,
        nav:false,
        navText: ["<i class='flaticon-left-arrow-3''></i>", "<i class='flaticon-right-arrow-3''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1000: {
                items: 2
            },
             1365: {
                items:3
            },
             1500: {
                items:3
            },
            1920: {
                items:3
              }
        }
    });



  //about brand //
$('.about-brand').owlCarousel({
        loop: true,
        autoplay:true,
        smartSpeed:2500,
        autoplayTimeout:4000,
        dots:false,
        dotsEach:false,
        nav:false,
        navText: ["<i class='flaticon-left-arrow-3''></i>", "<i class='flaticon-right-arrow-3''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1000: {
                items: 3
            },
             1365: {
                items:3
            },
             1500: {
                items:4
            },
            1920: {
                items:4
              }
        }
    });



  //client-testimonial-slider //
$('.client-testimonial-slider').owlCarousel({
        loop: true,
        autoplay:true,
        smartSpeed:2500,
        autoplayTimeout:4000,
        dots:true,
        dotsEach:1,
        nav:false,
        navText: ["<i class='flaticon-left-arrow-3''></i>", "<i class='flaticon-right-arrow-3''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1000: {
                items: 3
            },
             1365: {
                items:3
            },
             1500: {
                items:3
            },
            1920: {
                items:3
              }
        }
    });

 //team-slider //
$('.team-slider').owlCarousel({
        loop: true,
        autoplay:true,
        smartSpeed:2500,
        autoplayTimeout:4000,
        dots:false,
        dotsEach:1,
        nav:false,
        navText: ["<i class='flaticon-left-arrow-3''></i>", "<i class='flaticon-right-arrow-3''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 4
            },
             1365: {
                items:4
            },
             1500: {
                items:4
            },
            1920: {
                items:4
              }
        }
    });

 


    /* Portfolio Isotope  */
    $('.image_load').imagesLoaded(function() {

        if ($.fn.isotope) {

            var $portfolio = $('.image_load');

            $portfolio.isotope({

                itemSelector: '.grid-item',

                filter: '*',

                resizesContainer: true,

                layoutMode: 'masonry',

                transitionDuration: '0.8s'

            });
            $('.menu-filtering li').on('click', function() {

                $('.menu-filtering li').removeClass('current_menu_item');

                $(this).addClass('current_menu_item');

                var selector = $(this).attr('data-filter');

                $portfolio.isotope({

                    filter: selector,

                });

            });

        }

    });
                
    // Venubox
    $('.venobox').venobox({
        numeratio: true,
        infinigall: true
    });
    

        // to top Jquery
        $(window).scroll(function(){
            if($(this).scrollTop() > 40){
                $('#to-top').fadeIn();
            } else{
                $('#to-top').fadeOut();
            }
        });

        // sticky
    var wind = $(window);
    var sticky = $('#sticky-header');
    wind.on('scroll', function () {
        var scroll = wind.scrollTop();
        if (scroll <100) {
            sticky.removeClass('sticky-nav');
        } else {
            sticky.addClass('sticky-nav');
        }
    });



         //Header Search
        if($('.search-box-outer').length) {
            $('.search-box-outer').on('click', function() {
                $('body').addClass('search-active');
            });
            $('.close-search').on('click', function() {
                $('body').removeClass('search-active');
            });
        }
        // to wow Jquery
        new WOW().init();

    });
