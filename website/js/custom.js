$(window).on("load", function() {
    "use strict";


    //var prealoaderOption = $(window);
       // prealoaderOption.on("load", function () {
            var preloader = jQuery('.preloader');
            var preloaderArea = jQuery('.preloader');
            preloader.fadeOut();
            preloader.delay(350).fadeOut('slow');
        //});

    //  ============= Mobile Responsive Menu ============= 

    $(".responsive_nav ul ul").parent().addClass("has-items");
    $(".responsive_nav ul li.has-items > a").on("click", function(){
        $(this).parent().toggleClass("active").siblings().removeClass("active");
        $(this).next("ul").slideToggle();
        $(this).parent().siblings().find("ul").slideUp();
        return false;
    });

    // Search Form Function 

    $(".search-btn").on("click", function(){
        $(".search-formm").addClass("active");
    });
    $(".close-search").on("click", function(){
        $(".search-formm").removeClass("active");
    });


    // Responsive Mobile Menu 

     
    $(".open-mbl-menu").on("click", function(){
        $(".responsive-mobile-menuu").addClass("active");
        return false;
    });
    $(".close-menu").on("click", function(){
        $(".responsive-mobile-menuu").removeClass("active");
        return false;
    });

    // ========== ResonSive Mobile Menu ============ //
    $(".responsive-mobile-menuu > ul ul").parent().addClass("menu-item-has-children"); 
    $(".responsive-mobile-menuu > ul > li.menu-item-has-children > a").on("click", function(){
        $(this).parent().toggleClass("active").siblings().removeClass("active");
        $(this).next("ul").slideToggle();
        $(this).parent().siblings().find("ul").slideUp();
        return false;
    });


    $(".bar_inner .text-right .button" ).on('click',function(){
        $('html, body').animate({scrollTop:$('#appointment').position().top}, 'slow');
    });


    var inner_gap = $(".container").offset().left;
    $(".iner_content").css({
        "right": inner_gap
    });


    var hegt = $(".our-service-list").innerHeight();
    $(".service-img").css({
        "height": hegt
    });

    
    /*------------------------------------------------------------------
     Slider
     -------------------------------------------------------------------*/


    $('.client-review-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.main_slider').owlCarousel({
            "items": 1,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":2000,
            "loop":true,
            "dots": false,
    });
    $('.cases_slider').owlCarousel({
            "items": 1,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":2000,
            "loop":true,
            "dots": false,
    });


    $(".test_slider").owlCarousel({
            "items": 2,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 2],
            "itemsDesktopSmall": [980, 2],
            "itemsTablet": [768, 2],
            "itemsMobile": [479, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1000,
            "loop":true,
            "dots": false,

            "responsive":{
                "0":{
                    "items":1
                },
                "480":{
                    "items":1
                },
                "768":{
                    "items":2
                },
                "1200":{
                    "items":2
                }
            },

        });



    $(".test_slider_2").owlCarousel({
            "items": 1,
            "autoPlay": true,
            "nav":false,
            "margin": 5,
            "navigationText": [""],
            "itemsDesktop": [1199, 1],
            "itemsDesktopSmall": [980, 1],
            "itemsTablet": [768, 2],
            "itemsMobile": [479, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1000,
            "loop":true,
            "dots": false,

            "responsive":{
                "0":{
                    "items":1
                },
                "480":{
                    "items":1
                },
                "768":{
                    "items":2
                },
                "1200":{
                    "items":2
                }
            },

        });

    $(".ser_inner").owlCarousel({
            "items": 3,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 2],
            "itemsDesktopSmall": [980, 2],
            "itemsTablet": [768, 2],
            "itemsMobile": [479, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1000,
            "loop":true,
            "dots": false,

            "responsive":{
                "0":{
                    "items":1
                },
                "480":{
                    "items":1
                },
                "600": {
                    "items": 2
                },
                "991": {
                    "items":3  
                },
                "1200":{
                    "items":4
                }
            },

        });


     $(".shop_slider").owlCarousel({
            margin:20,
            "items": 4,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 2],
            "itemsDesktopSmall": [980, 2],
            "itemsTablet": [768, 2],
            "itemsMobile": [479, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1000,
            "loop":true,
            "dots": true,

            "responsive":{
                "0":{
                    "items":1
                },
                "480":{
                    "items":2
                },
                "768":{
                    "items":2
                },
                "1200":{
                    "items":4
                }
            },

        });

    $(".ser_inner-2").owlCarousel({
            margin:30,
            "items": 3,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 2],
            "itemsDesktopSmall": [980, 2],
            "itemsTablet": [768, 2],
            "itemsMobile": [479, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1000,
            "loop":true,
            "dots": false,

            "responsive":{
                "0":{
                    "items":1
                },
                "480":{
                    "items":2
                },
                "768":{
                    "items":2
                },
                "1200":{
                    "items":3
                }
            },

        });


    $('.partner-logo').owlCarousel({
            "items": 5,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 2],
            "itemsDesktopSmall": [980, 2],
            "itemsTablet": [768, 2],
            "itemsMobile": [479, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1000,
            "loop":true,
            "dots": false,

            "responsive":{
                "0":{
                    "items":1
                },
                "480":{
                    "items":2
                },
                "768":{
                    "items":4
                },
                "1200":{
                    "items":5
                }
            },

        });


    /*$('.partner-logo').owlCarousel({
            animateIn: 'pulse',
            autoplay: true,
            loop:true,
            margin:20,
            loop:false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },

                1000:{
                    items:5,
                    nav:true
                }
            }
        });*/

    $('.product_slider').owlCarousel({
            "items": 1,
            "autoPlay": true,
            "navText" : ["", ""],
            "itemsDesktop": [1199, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1500,
            "loop":true,
            "dots": false,
            "nav" : true
        });


    $('.side_bar-carousel').owlCarousel({
            "items": 1,
            "autoPlay": true,
            "navText" : ["", ""],
            "itemsDesktop": [1199, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":2000,
            "loop":true,
            "dots": false,
            "nav" : false
        });

    $('.labority_carousel').owlCarousel({
            "items": 1,
            "autoPlay": true,
            "navText" : ["", ""],
            "itemsDesktop": [1199, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":2000,
            "loop":true,
            "dots": false,
            "nav" : true
        });

    $('.service_slider').owlCarousel({
        loop:true,
        margin:0,
        dots: false,
        nav:true,
        navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $(".testi_slider").owlCarousel({
            "items": 3,
            "margin":20,
            "autoPlay": true,
            "nav":false,
            "navigationText": [""],
            "itemsDesktop": [1199, 2],
            "itemsDesktopSmall": [980, 2],
            "itemsTablet": [768, 2],
            "itemsMobile": [479, 1],
            "pagination": false,
            "autoHeight": false,
            "autoplay":true,
            "autoplayTimeout":1000,
            "loop":true,
            "dots": false,

            "responsive":{
                "0":{
                    "items":1
                },
                "480":{
                    "items":1
                },
                "768":{
                    "items":2
                },
                "1200":{
                    "items":3
                }
            },

        });

    $('.owl_prevent_slider').owlCarousel({
        loop:true,
        margin:10,
        
        nav:false,
        navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });


    /*------------------------------------------------------------------
     Tabs
     -------------------------------------------------------------------*/
    $( "#tabs" ).tabs();

    /*------------------------------------------------------------------
     Accordions
     -------------------------------------------------------------------*/
    
    $( "#accordion" ).accordion();
    
    /*------------------------------------------------------------------
     PrettyPhoto
     -------------------------------------------------------------------*/

    $("a.zoom").prettyPhoto({
        social_tools: ''
    });


    /*------------------------------------------------------------------
     Isotopes/Filtration
     -------------------------------------------------------------------*/

    var $container = $('#project-eliment');

    $container.isotope({
        itemSelector : '.item'
    });

    var $optionSets = $('.my-selector'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.on('click',function(){
        var $this = $(this);
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('.my-selector');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
            changeLayoutMode( $this, options )
        } else {
            $container.isotope( options );
        }

        return false;
    });



    /*------------------------------------------------------------------
     Range
     -------------------------------------------------------------------*/

    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 150,
        values: [ 45, 120 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    /*------------------------------------------------------------------
     Switcher
     -------------------------------------------------------------------*/

    $("#default-color" ).on('click',function(){
        jQuery("#color" ).attr("href", "css/theme-colors/default-color.css");
        return false;
    });

    $("#red" ).on('click',function(){
        jQuery("#color" ).attr("href", "css/theme-colors/red.css");
        return false;
    });

    $("#purple" ).on('click',function(){
        jQuery("#color" ).attr("href", "css/theme-colors/purple.css");
        return false;
    });

    $("#green" ).on('click',function(){
        jQuery("#color" ).attr("href", "css/theme-colors/green-brown.css");
        return false;
    });

    $("#orange" ).on('click',function(){
        jQuery("#color" ).attr("href", "css/theme-colors/orange.css");
        return false;
    });

    $(".picker_close" ).on('click',function(){
        jQuery("#choose_color").toggleClass("position");
    });

    $(".layout_two" ).on('click',function(){
        jQuery("#boxed").addClass("boxed_size");
    });

    $(".layout_one" ).on('click',function(){
        jQuery("#boxed").removeClass("boxed_size");
    });



    /*------------------------------------------------------------------
     Back to Top
     -------------------------------------------------------------------*/

    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
        scroll_top_duration = 1400,
    //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
                scrollTop: 0
            }, scroll_top_duration
        );
    });

    // Elements Animation
    if ($('.wow').length) {
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }

    //  Taking Height of div
    if ($(window).width() > 991) {
    var cl_height = $(".cl-info").innerHeight();
    $(".clinic-img").css({
        "height": cl_height
    });

    }


    // Custom Tabs Functionality

    $('.options ul li').on("click", function(){
        var tab_id = $(this).attr('data-tab');
        $('.options ul li').removeClass('current');
        $('.bfr-slider').removeClass('current');
        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });

    $(".options ul li a").on("click", function(){
        $(this).parent().siblings().removeClass("active");
        $(this).parent().addClass("active");
    });


    //  =============== Toggle Function ===============


    $(".toggle").each(function(){
        $(this).find('.content').hide();
        $(this).find('h2:first').addClass('active').next().slideDown(500).parent().addClass("activate");
        $('h2', this).on("click", function() {
            if ($(this).next().is(':hidden')) {
                $(this).parent().parent().find("h2").removeClass('active').next().slideUp(500).removeClass('animated fadeInUp').parent().removeClass("activate");
                $(this).toggleClass('active').next().slideDown(500).addClass('animated fadeInUp').parent().toggleClass("activate");
            }
        });
    });


    // Can also be used with $(document).ready()
    // $(window).load(function(){
    //   $('#f1').flexslider({
    //     animation: "slide",
    //     rtl: true,
    //     start: function(slider){
    //       $('body').removeClass('loading');
    //     }
    //   });
    //  $('#f2').flexslider({
    //     animation: "slide",
    //     animationLoop: false,
    //     itemWidth: 210,
    //     itemMargin: 5,
    //     pausePlay: true,
    //     mousewheel: true,
    //     rtl: true,
    //     asNavFor:'.flexslider'
    //   });
    // });
    
$(function(){

    if ($('.circlechart').length>0) {

  $('.circlechart').circlechart();
}

});



});