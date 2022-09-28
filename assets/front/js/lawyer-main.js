(function ($) {
    'use strict';
    /*---------------------------------
        Preloader JS
    -----------------------------------*/
    var prealoaderOption = $(window);
    prealoaderOption.on("load", function () {
      var preloader = jQuery('.spinner');
      var preloaderArea = jQuery('.preloader_area');
      preloader.fadeOut();
      preloaderArea.delay(350).fadeOut('slow');
    });
    /*---------------------------------
        Preloader JS
    -----------------------------------*/
  
    $('a.see-more').on('click', function (e) {
      e.preventDefault();
      $(this).prev('span').show();
      $(this).hide();
    })
  
    /*---------------------------------  
        sticky header JS
    -----------------------------------*/
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 100) {
        $(".lawyer_header").removeClass("sticky");
      } else {
        $(".lawyer_header").addClass("sticky");
      }
    });
    /*---------------------------------  
        sticky header JS
    -----------------------------------*/
    /*---------------------------------  
       Search JS
   -----------------------------------*/
    $(".search_icon,.close_link").on('click', function (e) {
      e.preventDefault();
      $(".search_wrapper").toggleClass("active");
    });
    /*---------------------------------  
        Meanmenu JS
    -----------------------------------*/
    $('.primary_menu nav').meanmenu({
      meanMenuContainer: '.mobile_menu',
      meanScreenWidth: "991"
    });
    /*---------------------------------  
        Meanmenu JS
    -----------------------------------*/
    /*---------------------------------
       page_scroll top JS
   --------------------------------*/
    $("a.page_scroll").on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        //console.log($(hash).offset().top - topOffset);
        $('html, body').animate({
          scrollTop: $(hash).offset().top - $("header").outerHeight() + "px"
        }, 1200, function () {
  
          //window.location.hash = hash;
        });
      } // End if
    });
    /*---------------------- 
       Slick Slider js
    ------------------------*/
    // mainSlider
    function mainSlider() {
      var BasicSlider = $('.hero_slide_v1');
      BasicSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $('.single_slider:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
      });
      BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.single_slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
      });
      BasicSlider.slick({
        autoplay: true,
        autoplaySpeed: 10000,
        dots: false,
        fade: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl: rtl == 1 ? true : false
      });
  
      function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function () {
            $this.removeClass($animationType);
          });
        });
      }
    }
    mainSlider();
  
    $('.service-slick,.pricing-slick,.team-slick,.blog-slick').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      autoplay: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      rtl: rtl == 1 ? true : false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    $('.testimonial_slide').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      autoplay: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      rtl: rtl == 1 ? true : false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            arrows: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 780,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 450,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    });
    $('.project-slick').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      autoplay: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      rtl: rtl == 1 ? true : false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    $('.partner_slide').slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 600,
      autoplay: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      rtl: rtl == 1 ? true : false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
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
      ]
    });
    /*---------------------- 
        Slick Slider js
    ------------------------*/
  
  
    /*---------------------- 
        Hero Area Backgound Video js
    ------------------------*/
    if ($("#bgndVideo").length > 0) {
      $("#bgndVideo").YTPlayer();
    }
    /*---------------------- 
        Hero Area Backgound Video js
    ------------------------*/
  
    /*---------------------- 
        Hero Area Particles Effect js
    ------------------------*/
    if ($("#particles-js").length > 0) {
      particlesJS.load('particles-js', 'assets/front/js/particles.json');
    }
    /*---------------------- 
        Hero Area Particles Effect js
    ------------------------*/
  
  
    /*---------------------- 
        Hero Area Water Effect js
    ------------------------*/
    if ($("#heroHome4").length > 0) {
      $('#heroHome4').ripples({
        resolution: 500,
        dropRadius: 20,
        perturbance: 0.04
      });
    }
    /*---------------------- 
        Hero Area Water Effect js
    ------------------------*/
  
    /*---------------------- 
        Projects Carousel js
    ------------------------*/
    var projectCarousel = $('.project-ss-carousel');
    projectCarousel.owlCarousel({
      loop: true,
      dots: true,
      nav: true,
      navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"],
      autoplay: false,
      autoplayTimeout: 5000,
      smartSpeed: 1500,
      rtl: rtl == 1 ? true : false,
      items: 1
    });
    /*---------------------- 
        Projects Carousel js
    ------------------------*/
  
    // project carousel Image popup
    $('.single-magnific-ss').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
    $('.single-ss').on('click', function (e) {
      e.preventDefault();
      let id = $(this).data('id');
      $("#singleMagnificSs" + id).trigger('click');
    });
  
    /*---------------------- 
        magnific-popup js
    ----------------------*/
    $('.play_btn').magnificPopup({
      type: 'iframe',
      removalDelay: 300,
      mainClass: 'mfp-fade'
    });
    /*---------------------- 
        magnific-popup js
    ----------------------*/
  
    /*----------------------
        Counter js
    ------------------------*/
    $('.counter').counterUp({
      delay: 60,
      time: 2000
    });
    // wow js
    new WOW().init();
    /*---------------------- 
        Scroll top js
    ------------------------*/
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 100) {
        $('#scroll_up').fadeIn();
      } else {
        $('#scroll_up').fadeOut();
      }
    });
    $('#scroll_up').on('click', function () {
      $("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });
    /*---------------------- 
        Scroll top js
    ------------------------*/
  
  
    $(window).on('load', function () {
      // preloader fadeout onload
      $(".loader-container").addClass('loader-fadeout');
  
      // preloader fadeout onload
      $(".loader-container").addClass('loader-fadeout');
  
  
      // isotope initialize
      $('.grid').isotope({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.single-pic',
        percentPosition: true,
        masonry: {
          // set to the element
          columnWidth: '.grid-sizer'
        }
      });
  
    });

    new LazyLoad();
  })(window.jQuery);   
