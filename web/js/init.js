$(document).on('ready', function () {
      
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#carouselCus3').slick('setOption', 'responsive', [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 6
          }
        }, {
          breakpoint: 992,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 576,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 446,
          settings: {
            slidesToShow: 2
          }
        }], true);
        

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'));

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');


      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700,
          easing: 'easeOutExpo'
        });

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
      });

      // var tpj = jQuery;

      // var revapi1014;
      // tpj(document).ready(function () {
      //   if (tpj("#rev_slider_1014_1").revolution == undefined) {
      //     revslider_showDoubleJqueryError("#rev_slider_1014_1");
      //   } else {
      //     revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
      //       sliderType: "standard",
      //       jsFileLocation: "revolution/js/",
      //       sliderLayout: "fullscreen",
      //       dottedOverlay: "none",
      //       delay: 9000,
      //       navigation: {
      //         keyboardNavigation: "off",
      //         keyboard_direction: "horizontal",
      //         mouseScrollNavigation: "off",
      //         mouseScrollReverse: "default",
      //         onHoverStop: "off",
      //         touch: {
      //           touchenabled: "on",
      //           swipe_threshold: 75,
      //           swipe_min_touches: 1,
      //           swipe_direction: "horizontal",
      //           drag_block_vertical: false
      //         },
      //         arrows: {
      //           style: "hermes",
      //           enable: true,
      //           hide_onmobile: true,
      //           hide_under: 768,
      //           hide_onleave: false,
      //           tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div><div class="tp-arr-titleholder">{{title}}</div></div>',
      //           left: {
      //             h_align: "left",
      //             v_align: "center",
      //             h_offset: 0,
      //             v_offset: 0
      //           },
      //           right: {
      //             h_align: "right",
      //             v_align: "center",
      //             h_offset: 0,
      //             v_offset: 0
      //           }
      //         }
      //       },
      //       responsiveLevels:[1240,1024,778,778],
      //       gridwidth:[1240,1024,778,480],
      //       gridheight:[600,500,400,300],
      //       lazyType: 'smart',
      //       scrolleffect: {
      //         fade: "on",
      //         grayscale: "on",
      //         on_slidebg: "on",
      //         on_parallax_layers: "on",
      //         direction: "top",
      //         multiplicator_layers: "1.4",
      //         tilt: "10",
      //         disable_on_mobile: "off",
      //       },
      //       parallax: {
      //         type: "scroll",
      //         origo: "slidercenter",
      //         speed: 400,
      //         levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
      //       },
      //       shadow: 0,
      //       spinner: "off",
      //       stopLoop: 'off',
      //       stopAfterLoops: -1,
      //       stopAtSlide: -1,
      //       shuffle: "off",
      //       autoHeight: "off",
      //       fullScreenAutoWidth: "off",
      //       fullScreenAlignForce: "off",
      //       fullScreenOffsetContainer: "",
      //       fullScreenOffset: "0px",
      //       hideThumbsOnMobile: "off",
      //       hideSliderAtLimit: 0,
      //       hideCaptionAtLimit: 0,
      //       hideAllCaptionAtLilmit: 0,
      //       debugMode: false,
      //       fallbacks: {
      //         simplifyAll: "off",
      //         nextSlideOnWindowFocus: "off",
      //         disableFocusListener: false,
      //       }
      //     });
      //   }

      //   RsTypewriterAddOn(tpj, revapi1014);

      var tpj = jQuery;
    
      var revapi24;
      tpj(document).ready(function () {
        if (tpj("#rev_slider_24_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_24_1");
        } else {
          revapi24 = tpj("#rev_slider_24_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 15000,
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              bullets: {
                enable: true,
                hide_onmobile: false,
                style: "bullet-bar",
                hide_onleave: false,
                direction: "horizontal",
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 50,
                space: 5,
                tmp: ''
              }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "none",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            // fullScreenOffset: "60px",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
        
        if (revapi24) revapi24.revSliderSlicey();    

      });