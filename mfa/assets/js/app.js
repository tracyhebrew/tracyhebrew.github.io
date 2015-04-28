if(typeof jQuery == 'undefined') {
    console.log('%cERROR', 'color:red', ' - jQuery not found.')
} else {
 
var MFA;


!(function ($) {
 
    "use strict";
 
    MFA = window.MERCYFORANIMALS = {};
 
    /**
     * Config
     * Debug toggling, environment, breakpoints, etc.
     */
    MFA.config = {
 
      environment : (window.location.href.match(/(localhost)/g) ? 'development' : 'production' ),
 
      debug: true,
 
      media_queries : {
          widescreen : 1400
      },
 
      compatibility : {
          input_placeholders : true,
          chrome_font_fix : false
      }
    }
 
 
    /**
     * Elements
     */
    MFA.$el = {
      header              : $('#header'),
      modal               : $('.modal'),
      modal_bay           : $('#modals'),
      wrap                : $('#wrap'),
      // tiles               : $('#merch-tiles .merch-row'),
      tiles               : $('#product-tiles'),
        
    };

 
 
    /**
     * Initiate Functions (document.onready & pjax:end)
     *
     */
    MFA.init = function() {
        MFA.initScripts();
        //MFA.compatibilityFixes();
        MFA.helpers.userAgentDetection();
        MFA.events();
        MFA.scroll();
        MFA.modals();
        MFA.animations();
        MFA.animationFrames();
        MFA.konamiCode();
        MFA.flexsliderCircle();
        MFA.slickTestimony();
        MFA.flexsliderLarge();
        MFA.tabs();
        MFA.headerVideo();
        MFA.teamExpander();
        MFA.merchExpander();
        MFA.lazyLoadVideo();
        MFA.productOrder();
        MFA.productSetupRows();
        MFA.compatibilityFixes();
    };
 
    /**
     * Initialize Scripts
     *
     */
    MFA.initScripts = function(){

      if ( !MFA.helpers.isUserAgent().mobile ) {
          // WOW.js
          if ( !window.WOW ) { return false; } else { new WOW().init(); }

          
          // skrollr.js
          if ( !window.skrollr ) { return false; } else { 
            // new skrollr.init(); 
            var s = skrollr.init({
                render: function(data) {
                  //Debugging - Log the current scroll position.
                  //console.log(data.curTop);
                }
            });
          } 
      }
    }
 
 
    /**
     * Fixes
     *
     */
    MFA.compatibilityFixes = function() {
 
        // invisible font fix for chrome
        if ( MFA.config.compatibility.chrome_font_fix ) {
          if ( MFA.helpers.isBrowser().desktop_chrome ) {
 
            var orig_body_offset = $('body').offset();
 
            $('body').offset(orig_body_offset);
            
          }
        }
 
        // placeholders for outdated browsers
        if ( MFA.config.compatibility.input_placeholders ) {
          MFA.helpers.inputPlaceholders('[placeholder]');
        }
    };
 
 
    /**
     * Click Event Bindings
     *
     */
    MFA.events = function(){

        /**
         * Nav Toggle
         */
        $(document).delegate('#nav-toggle', 'click', function (event) {

            var $this        = $(this),
                $wrap        = $('#wrap'),
                $nav         = $('#nav'),
                $inject_wrap = $('#inject--wrap'),
                $inject      = $('#inject'),
                $and         = $('#and');

            // Cart already open
            if( $('#header').hasClass('cart-toggle--open') ) {
             
              $('#cart-toggle').removeClass('cart-toggle--open');
              $this.toggleClass('nav-toggle--open');

              $('#header').removeClass('cart-toggle--open');
              $('#header').toggleClass('nav-toggle--open');

              $('#nav').toggleClass('nav--show');

              $inject_wrap.removeClass('cart--open');
              $inject_wrap.toggleClass('nav--open');

              $inject.removeClass('cart--open');
              $inject.toggleClass('nav--open');
            }

            else {
              $('#sidebarcart').removeClass('sidebarcart--show');

              $this.toggleClass('nav-toggle--open');

              $('#header').toggleClass('nav-toggle--open');
              $('#nav').toggleClass('nav--show');

              $and.toggleClass('z');

              $inject_wrap.toggleClass('nav--open');
              $inject.toggleClass('nav--open');
            }

        });

        /**
         * Cart Toggle
         */
        $(document).delegate('#cart-toggle', 'click', function (event) {

            var $this        = $(this),
                $wrap        = $('#wrap'),
                $nav         = $('#nav'),
                $inject_wrap = $('#inject--wrap'),
                $inject      = $('#inject');

            if( $('#header').hasClass('nav-toggle--open') ) {

              $('#nav-toggle').removeClass('nav-toggle--open');
              $this.toggleClass('cart-toggle--open');

              $('#header').removeClass('nav-toggle--open');
              $('#header').toggleClass('cart-toggle--open');

              $('#sidebarcart').addClass('sidebarcart--show');

              $('#nav').removeClass('nav--show');

              $inject_wrap.removeClass('nav--open');
              $inject_wrap.toggleClass('cart--open');

              $inject.removeClass('nav--open');
              $inject.toggleClass('cart--open');
            }
            
            else {
              $this.toggleClass('cart-toggle--open');

              $('#header').toggleClass('cart-toggle--open');

              $('#sidebarcart').toggleClass('sidebarcart--show')
              
              $inject_wrap.toggleClass('cart--open');
              $inject.toggleClass('cart--open');

            }
        });

        /**
         * STORE 'Continue Shopping' button works like cart-toggle
         */
        $(document).delegate('#continue-shopping', 'click', function (event) {

            event.preventDefault();

            var $this        = $('#cart-toggle'),
                $wrap        = $('#wrap'),
                $nav         = $('#nav'),
                $inject_wrap = $('#inject--wrap'),
                $inject      = $('#inject');

            if( $('#header').hasClass('nav-toggle--open') ) {

              $('#nav-toggle').removeClass('nav-toggle--open');
              $this.toggleClass('cart-toggle--open');

              $('#header').removeClass('nav-toggle--open');
              $('#header').toggleClass('cart-toggle--open');

              $('#sidebarcart').addClass('sidebarcart--show');

              $('#nav').removeClass('nav--show');

              $inject_wrap.removeClass('nav--open');
              $inject_wrap.toggleClass('cart--open');

              $inject.removeClass('nav--open');
              $inject.toggleClass('cart--open');
            }
            
            else {
              $this.toggleClass('cart-toggle--open');

              $('#header').toggleClass('cart-toggle--open');

              $('#sidebarcart').toggleClass('sidebarcart--show')
              
              $inject_wrap.toggleClass('cart--open');
              $inject.toggleClass('cart--open');

            }
        });


        /**
         * Social btns - add visited class
         */
        $(document).delegate('.menu--social a', 'click', function (event) {
            //event.preventDefault();
            $(this).addClass('btn--visited');
        });


        /**
         * Isotope Filters
         */
        $(document).delegate('.isotope-filter', 'click', function (event) {
  
            event.preventDefault();

            /* Filter
            ------------------------------------------------- */
            var tiles       = $('#product-tiles'),
            // var tiles       = $('#merch-tiles .merch-row'),
                cat_filter  = $(this).data('filter');
            
            $('#product-tiles').isotope({
                filter : cat_filter,
                // isInitLayout: true
            });

            /* Setup 'first' and 'last' classes
            ------------------------------------------------- */
            $('#product-tiles').isotope( 'on', 'layoutComplete', function() {
              // console.log('layout is complete');

              $('.product-row .tile').unwrap();
              MFA.productSetupRows();
            });

            $('body').css('height', '100%');
        })
    };
    

    /**
     * Animations
     *
     */
    MFA.animations = function() {

        /**
         * 
         */  

    }
 
 
    /**
     * Scroll
     * 
     * @require `.scroll` class on <a>
     */
    MFA.scroll = function(){
 
        // <a> method manual
        $('a.scroll, li.scroll > a').click(function(e){
            e.preventDefault();
 
            var $this       = $(this),
                target_id   = $this.attr('href'),
                target      = $(target_id),
                duration    = (target.offset().top - $(window).scrollTop());
 
            MFA.helpers.animateScroll(target, duration, 'swing', 15);
        });
    };
 
 
    /**
     * Ajax Loader Event Bindings
     *
     */
    MFA.loadContentBindings = function() {
 
        $('*[data-load-content]').click(function (event) {
 
            event.preventDefault();
 
            var $this       = $(this),
                url         = $this.attr('href'),
                selector    = $this.data('load-content-selector'),
                target      = $this.data('load-content-target');
 
                console.log(url, selector, target);
 
            MFA.loadContent(url, selector, target);
        })
    }
 
 
    /**
     * Ajax Loader
     *
     */
    MFA.loadContent = function(url, selector, target, callback) {
 
        var request = $.ajax({
            url: url,
            type: 'POST',
            dataType: 'html'
        })
        .done(function (data) {
 
            if ( MFA.config.debug ) { console.log("loadContent -> SUCCESS"); }
 
            if ( data ) { var html = $(data); }
 
            $(target).html(html.filter(selector));
        
 
            if ( callback !== undefined ) { callback(html); }
        })
        .fail(function (data) {
            if ( MFA.config.debug ) { console.log("error", data); }
        })
 
        // return request;
        
    }
 
 
 
    /**
     * Modals
     *
     */
    MFA.modals = function() {

      var modals          = MFA.$el.modal,
          modal_bay       = MFA.$el.modal_bay,
          modal_trigger   = $('.modal-trigger'),
          modal_close     = $('.modal-close');
          

      // move all modals to modal bay
      modals.appendTo(modal_bay);

      modal_trigger.click(function (event) {
          event.preventDefault();

          var $this           = $(this),
              modal_target    = $($this.attr('href')),
              modal_cat_color = $('[data-cat-color]') ? $('[data-cat-color]').data('cat-color') : null;

          // if trigger also has class of 'modal-trigger-auth' ( modal only needs to fire is user is logged out )
          // if ( $(this).hasClass('modal-trigger-auth') ) {
          //     if ( App.current_user.is_logged_in ) {
          //         console.log('User is logged in so not firing modal');
          //     } else {
          //         console.log('User is not logged in so firing auth modal');
          //         modalEffects(modal_target);
          //         $('input[name="cag_user_email"').focus();
          //     }
          // } else {
               modalEffects(modal_target);
          // }

          function modalEffects(target) {

              modal_bay.addClass('show');

              MFA.$el.wrap.addClass('blur');

              target.addClass('show '+ modal_cat_color);

              // close via button
              modal_close.click(function() {
                  // App.el.wrap.removeClass('blur');
                  target.removeClass('show');
                  modal_bay.removeClass('show');
              });
              // close via esc key
              $(window).on('keydown', function (event) {

                  if ( event.keyCode == 27) {
                      // App.el.wrap.removeClass('blur');
                      target.removeClass('show');
                      modal_bay.removeClass('show');
                  }
              });
          }
      });
    }

    /**
     *  TEAM EXPANDER
     */
    MFA.teamExpander = function() {

      if ( MFA.helpers.isUserAgent().ipad || !MFA.helpers.isUserAgent().mobile ) {
        $('.team-tile.fifth').click(function (event) {
          event.preventDefault();

          var $this       = $(this),
              desc        = $this.children('.team-tile__description').html(),

              team_tile   = $(this),
              parent_row  = team_tile.parent(),

              expander    = '<div id="team-expander"></div>',
              $expander   = $('#team-expander');

          $('body').find('#team-expander').remove();
          $('.team-tile').removeClass('team-tile--active');

          team_tile.addClass('team-tile--active');
          parent_row.after(expander);

          $('#team-expander')
            .append('<div class="container"><span id="close-expander"></span><div class="team-expander__inner">'+desc+'</div></div>')
            .show()

          $('html, body').animate({
            scrollTop: $('#team-expander').offset().top - 300
          }, 250, 'swing');
        }); 
          
      } 
      else {
          $('.team-tile.fifth').click(function (event) {
            event.preventDefault();

            var team_tile   = $(this),
                team_desc   = team_tile.find($('.team-tile__description'));

            $('.team-tile').removeClass('team-tile--active');
            team_tile.addClass('team-tile--active');

            $(team_desc).prepend('<span id="close-expander"></span>')

            $('html, body').animate({
                scrollTop: team_desc.offset().top - 275
            }, 250, 'swing');

            $('#team-expander').hide();
          }); 
      }

      $(document.body).on('click', '#close-expander' ,function(){

        event.preventDefault();

        $('body').find('#team-expander').remove();
        $('body').find('.team-tile.team-tile--active').removeClass('team-tile--active');
      });
    }

    /**
     *  MERCH EXPANDER
     */

    MFA.productSetupRows = function() {

      if ( MFA.helpers.isUserAgent().ipad || !MFA.helpers.isUserAgent().mobile ) {
          while ( $('#product-tiles > .tile:visible' ).length ) {

            $('#product-tiles > .tile:visible:lt(4)').wrapAll('<div class="product-row" />');
          
          }
      } else {
          
          while ( $('#product-tiles > .tile:visible' ).length ) {

            $('#product-tiles > .tile:visible:lt(1)').wrapAll('<div class="product-row" />');
          }
      }
    }

    MFA.merchExpander = function() {
      
      if ( MFA.helpers.isUserAgent().ipad || !MFA.helpers.isUserAgent().mobile ) {
        $('#product-tiles .tile').click(function (event) {
          event.preventDefault();

          var $merch          = $(this),
              desc            = $merch.children('.tile__expand').html(),

              merch_tile      = $(this).closest('.tile'),
              parent_row      = merch_tile.parent(),
          
              expander        = '<div id="product-expander"></div>',
              $expander       = $('#product-expander');

          $('body').find('#product-expander').remove();
          $('.tile').removeClass('tile--active');

          merch_tile.addClass('tile--active');
          parent_row.after(expander);
          
          
          $('#product-expander')
            .append('<div class="container"><div id="merch-close"></div>'+desc+'</div>')
            .show()

            var $merch_photos     = $('#product-expander .product-photos'),
                merch_photo_count = $merch_photos.find('li').length;

            if ( merch_photo_count > 1 ) {
              $merch_photos.flexslider({
                animation: 'fade',
                itemWidth: 315,
                prevText: '',
                nextText: '',
                slideshow: false,
                allowOneSlide: false,
                init : function(data) {}
              });
            }

          $('#product-tiles.container').css('height','100%');

          var expander_offset = $('#product-expander');

          $('html, body').animate({
              scrollTop: expander_offset.offset().top - 200
          }, 250, 'swing');

          if( $merch.hasClass('tile--alt') ) {
            $('#product-expander .product-photos').addClass('tile--alt');
          }
        });
          
      } 

      else {
            $('#product-tiles .tile .btn--merch.view').click(function (event) {
              event.preventDefault();

              var $merch        = $(this).closest('.tile'),
              desc              = $merch.children('.tile__expand').html(),

              merch_tile      = $(this).closest('.tile'),
              parent_row      = merch_tile.parent(),
              
              expander        = '<div id="product-expander"></div>',
              $expander       = $('#product-expander');

              $('body').find('#product-expander').remove();
              $('.tile').removeClass('tile--active');

              merch_tile.addClass('tile--active');
              parent_row.after(expander);
              //merch_tile.after(expander);

              $('#product-expander')
                .append('<div class="container"><div id="merch-close"></div>'+desc+'</div>')
                .show()

                var $merch_photos     = $('#product-expander .product-photos'),
                    merch_photo_count = $merch_photos.find('li').length;

                if ( merch_photo_count > 1 ) {
                  $merch_photos.flexslider({
                    animation: 'slide',
                    touch: true,
                    itemWidth: 300,
                    prevText: '',
                    nextText: '',
                    slideshow: false,
                    allowOneSlide: false,
                    init : function(data) {}
                  });
                }

              var expander_offset = $('#product-expander');

              $('html, body').animate({
                  scrollTop: expander_offset.offset().top - 100
              }, 250, 'swing');

              if( $merch.hasClass('tile--alt') ) {
                $('#product-expander .product-photos').addClass('tile--alt');
              }
          }); 
      }

      $(document.body).on('click', '#merch-close' ,function(){

        event.preventDefault();

        $('body').find('#product-expander').remove();
        $('body').find('.tile.tile--active').removeClass('tile--active');
      });

    }
    
    /**
     * Isotope
     */
    MFA.isotope = {

        columnWidth : function() {
            var column_width = Math.max.apply(null,$('#product-tiles .tile').map(function(){return $(this).outerWidth(true);}).get());

            return column_width;
        },

        setColumns : function() {

            var columns;

            if ( $(window).width() <= 768 ) {
                columns = 1;
            } 
            else {
                columns = 4;
            }

            return columns;
        },

        setup : function() {
            MFA.$el.tiles.isotope({
                itemSelector: '.tile',
                layoutMode: 'packery',
                resizesContainer: true,
                transitionDuration: '0.25s'
            });


        },

        infinitescroll: function() {
            // MFA.$el.tiles.infinitescroll({
            //     debug        : false,
            //     navSelector  : '#product-nav',    
            //     nextSelector : '#product-nav a',  
            //     itemSelector : '.merch',
            //     loading      : {
            //         finishedMsg: 'No more pages to load.',
            //         loadingText: 'Loading More Resources',
            //         img: 'http://i.imgur.com/naoSgvr.png'
            //     }
            // }, function( newElements ) {
            //     MFA.$el.tiles.isotope( 'appended', $( newElements ) ); 
            //     MFA.isotope.preload();
            // });
        },


        preload: function() {

            // var tile_photo = $('.tile-photo');

            // // simply preloader
            // tile_photo.each(function() {
            //   $(this).css({
            //     opacity: 0
            //   }).load(function() {
            //     $(this).animate({
            //       opacity: 1
            //     }, 1000);
            //   })
            //     .attr('style', 'background-image:url(' + $(this).data('src') + ');')
            //     .delay(100)
            //     .attr('data-src','');

            //  setTimeout(function() {
            //     tile_photo.removeClass('tile-photo-loading');
            //  }, 50);
            // });
        },

        run : function() {
            MFA.isotope.setColumns();
            MFA.isotope.setup();
            MFA.isotope.preload();
            MFA.isotope.infinitescroll();
        }
    }

    /**
     * locationMap
     */
    MFA.locationMap = function() {
 
      var map = $('.map');
 
      if ( map.length > 0 ) {
        map.clone().appendTo('#content').addClass('clone').attr('id', '#map--clone');
      }
    }
 
 
    /**
     * animationFrames
     */
    MFA.animationFrames = function(){
 
        // var heights = [];
 
        var scroll = window.requestAnimationFrame ||
                     window.webkitRequestAnimationFrame ||
                     window.mozRequestAnimationFrame ||
                     window.msRequestAnimationFrame ||
                     window.oRequestAnimationFrame ||
                     // IE Fallback, you can even fallback to onscroll
                     function(callback){ window.setTimeout(callback, 1000/60) };
 
        var lastPosition = -1;
 
        function animationLoop(){
            // Avoid calculations if not needed
            if (lastPosition == window.pageYOffset) {
                scroll(animationLoop);
                return false;
            } else lastPosition = window.pageYOffset;
 
            // Debugging
            if ( MFA.config.debug ) { 
              //console.log('pageYOffset', window.pageYOffset); 
            }
 
            // Calculations
            animateStickyHeader();
 
            
            scroll( animationLoop );
        }
 
        /**
         * animateHeaderOpacity
         */
        function animateStickyHeader() {
 
          if ( window.pageYOffset > ( $('#hero').height() - 120 || $('#hero').height() - 120 ) )
              MFA.$el.header.addClass('sticky')
 
          if ( window.pageYOffset < ( $('#hero').height() - 120 || $('#hero').height() - 120 ) )
              MFA.$el.header.removeClass('sticky')

        }
 
        // init loop
        animationLoop();
 
    };
 
 
    /**
     * Sliders
     *
     */

    /* Testimonies - HOME
    ------------------------------------------------- */
    MFA.slickTestimony = function() {
      $('.testimony-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,

        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      });
    }
      

    /* CTA
    ------------------------------------------------- */
    MFA.flexsliderLarge = function() {

      if ( MFA.helpers.isUserAgent().mobile ) {
          $('.flexslider--large').flexslider({
              animation: 'fade', 
              touch: true,     
              prevText: '',        
              nextText: ''           

          });
      } else {
          $('.flexslider--large').flexslider({
              animation: 'fade', 
              prevText: '',        
              nextText: '' 
          });  
      } 
    }

    /* Stories
    ------------------------------------------------- */
    MFA.flexsliderCircle = function() {
        if ( MFA.helpers.isUserAgent().mobile ) {
            $('.flexslider--circle').flexslider({
                animation: 'fade', 
                touch: true,  
                prevText: '',        
                nextText: ''           

            });
        } else {
            $('.flexslider--circle').flexslider({
                animation: 'fade', 
                prevText: '',        
                nextText: '' 
            });  
        } 
    }
    
    /**
     * Tabs
     *
     */
    MFA.tabs = function() {
      /* CTA - BLUE BLOCKS 
      ------------------------------------------------- */
      $(".tabs__menu.cta a.cta__block").click(function(event) {
          event.preventDefault();

          $(this).parent().addClass("current");
          $(this).parent().siblings().removeClass("current");

          var tab = $(this).attr("href");
          $(".tab__content").not(tab).css("display", "none");
          
          $(tab).fadeIn();
      });

      var $tabs = $('.tabs-container');
      
      $(".tabs-container--cta .tab__content").each(function(i){

          var $this = $('li.current');
          var next  = $this.first('li');

          $(this).append("<a href='' class='tab__nav tab__nav--next' rel=''><i class='fa fa-angle-right'></i> </a>");
          $(this).append("<a href='' class='tab__nav tab__nav--prev' rel=''><i class='fa fa-angle-left'></i></a>");
      });

      // NEXT BUTTON
      $(".tab__nav--next").click(function(event) {
        event.preventDefault();
        
        if( $(".tabs-container--cta li.last").hasClass("current") ) {
          $(".tabs-container--cta li.last").removeClass("current");
          $(".tabs-container--cta li.first").addClass("current");
        }

        else {
          var next    = $(".tabs-container--cta li.current").nextAll().eq(1);

          $(".tabs-container--cta li.current").removeClass("current");
          next.addClass("current"); 
        }

        var tab = $(".tabs-container--cta li.current a").attr("href");
        $(".tabs-container--cta .tab__content").not(tab).css("display", "none");
        $(tab).fadeIn();
      });

      // PREV BUTTON
      $(".tab__nav--prev").click(function(event) {
        event.preventDefault();

        if( $(".tabs-container--cta li.first").hasClass("current") ) {
          $(".tabs-container--cta li.first").removeClass("current");
          $(".tabs-container--cta li.last").addClass("current");
        }

        else {
          var prev = $(".tabs-container--cta li.current").prevAll().eq(1);

          $(".tabs-container--cta li.current").removeClass("current");
          prev.addClass("current");
        }

        var tab = $(".tabs-container--cta li.current a").attr("href");
        $(".tabs-container--cta .tab__content").not(tab).css("display", "none");
        $(tab).fadeIn();
      });

      /* Stats/stories - THE PROBLEM
      ------------------------------------------------- */
      $(".tabs__menu--stories a").click(function(event) {
          event.preventDefault();
          $(this).parent().addClass("current");
          $(this).parent().siblings().removeClass("current");

          var tab = $(this).attr("href");
          $(".tab__content--stories").not(tab).css("display", "none");
          
          // $(tab).fadeIn();
          $(tab).css("display", "table");

          // $('html, body').animate({
          //   scrollTop: $('.tabs-container').offset().top - 150
          // }, 250, 'swing')
      });

      /* Other Ways to Give - DONATE 
      ------------------------------------------------- */
      $(".tabs__menu.default a").click(function(event) {
          event.preventDefault();
          $(this).parent().addClass("current");
          $(this).parent().siblings().removeClass("current");

          var tab = $(this).attr("href");
          $(".tab__content").not(tab).css("display", "none");
          
          $(tab).fadeIn();

          $('html, body').animate({
            scrollTop: $('.tabs-container').offset().top - 75
          }, 250, 'swing');
      });
    }


     /**
     * Header Video
     *
     */
    MFA.headerVideo = function() {

        $('.hero--video .hero--video__play').click(function(event){

          event.preventDefault();

          var $this           = $('.hero--video'),
              video_id        = $this.data('video-id'),
              video_service   = $this.data('video-service'),
              width           = $this.width(),
              height          = $this.height();

          function headerBuildEmbed(service, id) {
            if (service === 'youtube') {
                var embed = '<iframe id="" class="ytplayer" src="https://www.youtube.com/embed/'+video_id+'?enablejsapi=1&playerapiid=ytplayer&version=3&autoplay=1&rel=0&showinfo=0&autohide=1" width="'+width+'" height="'+height+'"></iframe>';
                return embed;
            }
            if (service === 'vimeo') {
                var embed = '<iframe id="" class="ytplayer" src="https://player.vimeo.com/video/'+video_id+'?enablejsapi=1&playerapiid=ytplayer&version=3?title=0&amp;autoplay=1&amp;byline=0&amp;portrait=0&amp;badge=0" width="'+width+'" height="'+height+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
                return embed;
            }
          }

          var header_embed_code = headerBuildEmbed(video_service, video_id);

          $('.hero--video p, .hero--video img, .hero--video .hero--video__play, .hero--video h1 ').css({'opacity' : 0});
          $('#hero--video__close').css({'opacity' : 1});
          $('.hero__inner').css({'display':'none'});
          $('#header').css({'display':'none'});
          $('.hero--video').append(header_embed_code);          
        });

        // Close the Video
        $('#hero--video__close').click(function(){
          $('.hero--video iframe').remove();  
          $('#hero--video__close').css({'opacity' : 0});
          $('.hero__inner').css({'display':'block'});
          $('#header').css({'display':'block'});
          $('.hero--video p, .hero--video img, .hero--video .hero--video__play, .hero--video h1 ').css({'opacity' : 1});
        });
    }

    /**
    * Lazy Load Video
    *
    */
    MFA.lazyLoadVideo = function() {

        $('.lazyload .btn--lazyload').click(function(){
            var $this           = $('.lazyload'),
                video_id        = $this.data('video-id'),
                video_service   = $this.data('video-service'),
                width           = $this.width(),
                height          = $this.height();

                // console.log(width, height);

            // embed code builder function
            function buildEmbed(service, id) {
                if (service === 'youtube') {
                    var embed = '<iframe id="" class="ytplayer" src="https://www.youtube.com/embed/'+video_id+'?enablejsapi=1&playerapiid=ytplayer&version=3&autoplay=1&rel=0&showinfo=0&autohide=1" width="'+width+'" height="'+height+'"></iframe>';
                    return embed;
                }
                if (service === 'vimeo') {
                    var embed = '<iframe id="" class="ytplayer" src="https://player.vimeo.com/video/'+video_id+'?enablejsapi=1&playerapiid=ytplayer&version=3?title=0&amp;autoplay=1&amp;byline=0&amp;portrait=0&amp;badge=0" width="'+width+'" height="'+height+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
                    return embed;
                }
            }

            // build the embed code
            var embed_code = buildEmbed(video_service, video_id);

            // remove inner elements
            $this.find('iframe').remove();
            $this.find('img').remove();
            $this.find('.media-image-overlay').css('opacity', 0);
            $this.find('.media-image-icon').hide();
            $this.find('.btn--lazyload').hide();
            $this.find('.lazyload__content').hide();
            $this.find('.hero--video__inner').hide();
            $this.css('background-image', '');
            $this.find('.post-format-video-overlay').remove();

            // append the generated embed code
            if ( $this.find('iframe').length <= 0 ) {
                $this.append(embed_code);
            } else {
                // nothing
            }
        });
    }

    /**
    * Lazy Load Image
    *
    */
    MFA.lazyLoadImage = function(method) {

        if ( method === 'delayed' ) {
            setTimeout(function(){
                $('.lazyload-img:in-viewport').addClass('show');
            }, 100);
        } else {
            $('.lazyload-img:in-viewport').addClass('show');
        }
    }

    /**
    * Video Player - Investigations Page
    *
    */
    MFA.videoPlayer = function() {
      
      $('.playlist__video').click(function() {  

        var $this           = $(this),
            video_id        = $this.data('video-id'),
            video_service   = $this.data('video-service'),
            width           = $this.width(),
            height          = $this.height(),
            video_desc      = $this.find('.video__desc').html(),
            video_thumb     = $this.find('.playlist__thumb'),
            vid_frame       = $this.parent().parent().parent().siblings('.videoPlayer').find('.vid_frame'),
            desc_current    = $this.parent().parent().parent().siblings('.videoPlayer').find('.video__desc--current'),
            vid_playing     = $(vid_frame).attr('id');

            //console.log(vid_playing);

            var all_vid = $('body').find('.vid_frame').not(vid_playing);

            

            //console.log(IDs);

        // embed code builder function
        function buildPlayerEmbed(service, id) {
          if (service === 'youtube') {
              var embed = 'https://www.youtube.com/embed/'+video_id+'?enablejsapi=1&playerapiid=ytplayer&version=3&autoplay=1&rel=0&showinfo=0&autohide=1';
              return embed;
          }
          if (service === 'vimeo') {
              var embed = 'https://player.vimeo.com/video/'+video_id+'?enablejsapi=1&playerapiid=ytplayer&version=3?title=0&amp;autoplay=1&amp;byline=0&amp;portrait=0&amp;badge=0"';
              return embed;
          }
        }

        // build the embed code
        var player_embed_code = buildPlayerEmbed(video_service, video_id);

        $('.playlist__thumb').not(video_thumb).removeClass('current');
        $(video_thumb).addClass('current');

        // $('.vid_frame').attr('src', player_embed_code);
        $(vid_frame).attr('src', player_embed_code);

        $(desc_current).empty();
        $(desc_current).append(video_desc);

        var inactive_vids = [];
        $('body').find('.vid_frame').not( document.getElementById(vid_playing)).each(function(){ inactive_vids.push(this.id); });

        //console.log(inactive_vids);
      });

  
      /* Playlist slider
      ------------------------------------------------- */
      if ( MFA.helpers.isUserAgent().ipad || !MFA.helpers.isUserAgent().mobile ) {
          $(".playlist").flexslider({
              animation: "slide", 
              itemWidth:  ($('.playlist').width()/4-3),
              itemMargin: 3,
              prevText: "",        
              nextText: "",
              slideshow: false,
              touch: true
          });
      }
    }

    /**
     * FORM STUFF FOR MERCH ORDERS
     *
     */
    MFA.productOrder = function() {

      /* CART DISABLED
      ------------------------------------------------- */
      if( $('.form--order input.cart').is(':disabled') ) {
        
        var inputCart = $('.form--order input.cart:disabled');

        inputCart.parent().addClass('cart-disabled');
      }

      /* ADD TO CART
      ------------------------------------------------- */
      $('.cart').click(function(event) {
        event.preventDefault();

        $('#cart-toggle').click();
      });


      /* LINKS TO ITEM
      ------------------------------------------------- */

    }
    
    MFA.konamiCode = function() {
 
        var secret = '38403840373937396665',
            input  = '',
            timer;
 
        $(document).keyup(function (e) {
 
            input += e.which;
 
            clearTimeout(timer);
 
            timer = setTimeout(function() {
                input = '';
            }, 500);
 
 
            if( input == secret ) {
                // do stuff here
                if ( MFA.config.debug ) { console.log('konami code fired!'); }
            }
        })
    }
 
 
    /**
     * DOCUMENT READY
     *
     */
    $(document).ready(function(){
 
        MFA.init();


        /* #product-nav toggle .selected
        ------------------------------------------------- */
        $('.product-type').click(function(event) {
          event.preventDefault();

          $('body').find('.product-type.selected').removeClass('selected');

          $(this).toggleClass('selected');

          // Hide any #product-expander, remove .tile--active class
          $('body').find('#product-expander').remove();
          $('body').find('.merch.tile--active').removeClass('tile--active');
        })


        /* MOBILE Nav sub-menu expand
        ------------------------------------------------- */
        if ( !MFA.helpers.isUserAgent().ipad && MFA.helpers.isUserAgent().mobile ) {

          $('ul.sub-menu').hide();

          $('li.menu-item-has-children > a').append('<a class="open-submenu"></a>');
          
          $('.open-submenu').click( function(event) {

            event.preventDefault();

            var $this           = $(this),
                li_parent       = $this.parent().parent();

            $('body').find($('li.menu-item-has-children.open')).removeClass('open');

            $('li.menu-item-has-children').not(li_parent).find('ul.sub-menu').hide('slow');

            $(li_parent).addClass('open').find('ul.sub-menu').show('slow');
          });

        }

    });
 
 
 
    /**
     * WINDOW LOAD
     *
     */
    $(window).load(function(){

        MFA.lazyLoadImage();
        MFA.videoPlayer();

        /**
         * Isotope Init
         */
        MFA.isotope.run();


        /* videoPlayer - Pausing videos INVESTIGATIONS
        ------------------------------------------------- */
        // YOUTUBE API
        var yt_int, yt_players={},
            initYT = function() {
                $(".ytplayer").each(function() {
                    yt_players[this.id] = new YT.Player(this.id);
                });
            };

        $.getScript("//www.youtube.com/player_api", function() {
            yt_int = setInterval(function(){
                if(typeof YT === "object"){
                    initYT();
                    clearInterval(yt_int);
                }
            },500);
        });

        // FIND VIDEOS ALL OTHER VIDEOS TO PAUSE
        $(document.body).on('click', '.playlist__video' ,function(){
          var $this           = $(this),
              vid_frame       = $this.parent().parent().parent().siblings('.videoPlayer').find('.vid_frame'),
              desc_current    = $this.parent().parent().parent().siblings('.videoPlayer').find('.video__desc--current'),
              vid_playing     = $(vid_frame).attr('id');


          var inactive_vids   = [];
          $('body').find('.vid_frame').not( document.getElementById(vid_playing)).each(function(){ inactive_vids.push(this.id); });



          //console.log(inactive_vids);
          console.log(vid_playing);

          if( vid_playing == 'pork' ) {
            // yt_players['iframe-hero'].pauseVideo();
            // yt_players['iframe-lazyload'].pauseVideo();

            yt_players['chicken'].pauseVideo();
            yt_players['dairy'].pauseVideo();
            yt_players['eggs'].pauseVideo();
            yt_players['turkey'].pauseVideo();
            yt_players['veal'].pauseVideo();
            yt_players['other'].pauseVideo();
          }
          else if( vid_playing == 'chicken' ) {
            // yt_players['iframe-hero'].pauseVideo();
            // yt_players['iframe-lazyload'].pauseVideo();

            yt_players['pork'].pauseVideo();
            yt_players['dairy'].pauseVideo();
            yt_players['eggs'].pauseVideo();
            yt_players['turkey'].pauseVideo();
            yt_players['veal'].pauseVideo();
            yt_players['other'].pauseVideo();
          }
          else if( vid_playing == 'dairy' ) {
            // yt_players['iframe-hero'].pauseVideo();
            // yt_players['iframe-lazyload'].pauseVideo();

            yt_players['chicken'].pauseVideo();
            yt_players['pork'].pauseVideo();
            yt_players['eggs'].pauseVideo();
            yt_players['turkey'].pauseVideo();
            yt_players['veal'].pauseVideo();
            yt_players['other'].pauseVideo();
          }
          else if( vid_playing == 'eggs' ) {
            // yt_players['iframe-hero'].pauseVideo();
            // yt_players['iframe-lazyload'].pauseVideo();

            yt_players['chicken'].pauseVideo();
            yt_players['pork'].pauseVideo();
            yt_players['dairy'].pauseVideo();
            yt_players['turkey'].pauseVideo();
            yt_players['veal'].pauseVideo();
            yt_players['other'].pauseVideo();
          }
          else if( vid_playing == 'turkey' ) {
            // yt_players['iframe-hero'].pauseVideo();
            // yt_players['iframe-lazyload'].pauseVideo();

            yt_players['chicken'].pauseVideo();
            yt_players['pork'].pauseVideo();
            yt_players['eggs'].pauseVideo();
            yt_players['dairy'].pauseVideo();
            yt_players['veal'].pauseVideo();
            yt_players['other'].pauseVideo();
          }
          else if( vid_playing == 'veal' ) {
            // yt_players['iframe-hero'].pauseVideo();
            // yt_players['iframe-lazyload'].pauseVideo();

            yt_players['chicken'].pauseVideo();
            yt_players['pork'].pauseVideo();
            yt_players['eggs'].pauseVideo();
            yt_players['dairy'].pauseVideo();
            yt_players['turkey'].pauseVideo();
            yt_players['other'].pauseVideo();
          }
          else if( vid_playing == 'other' ) {
            // yt_players['iframe-hero'].pauseVideo();
            // yt_players['iframe-lazyload'].pauseVideo();

            yt_players['chicken'].pauseVideo();
            yt_players['pork'].pauseVideo();
            yt_players['eggs'].pauseVideo();
            yt_players['dairy'].pauseVideo();
            yt_players['turkey'].pauseVideo();
            yt_players['veal'].pauseVideo();
          }

         
        });
       
    });
 
    /**
     * WINDOW SCROLL
     *
     */
    $(window).on('scroll', function(){
  
    });
    

 
    /**
     * WINDOW RESIZE
     *
     */
    $(window).resize(function(){   
        MFA.isotope.setColumns();

        
    }).trigger('resize');

 
 
    // var mq_widescreen = window.matchMedia('only screen and (min-width:'+MFA.config.media_queries.widescreen+'px)');

    // mq_widescreen.addListener(function (mql) {
        
    // });


    /**
     * ORIENTATION CHANGE (requires jQuery mobile)
     *
     */
    window.addEventListener("orientationchange", function() {
        
        
 
    }, false);
 
 
 
 
    /**
     * SELF INVOKING ANONYMOUS FUNCTION(s)
     *
     */
    (function(){ 

    })(); 
 
 
 
 
    /**
     * Helpers
     * Various helper functions for user agent detection and cross browser compatibility
     */
    MFA.helpers = {
 
        /**
         * isUserAgent
         * Determine the user agent via regex matching the string
         * @return {Boolean}
         */
        isUserAgent : function() {
            return {
                iOS         : (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false),
                iphone      : (navigator.userAgent.match(/(iPhone|iPod)/g) ? true : false),
                ipad        : (navigator.userAgent.match(/(iPad)/g) ? true : false),
                android     : (navigator.userAgent.match(/(Android)/g) ? true : false),
                mobile      : ((/Mobile|iPhone|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera) ? true : false),
                mobile_all  : ((/Mobile|Android|iPhone|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera) ? true : false)
            }
        },

        /**
         * userAgentDetection
         * Perform actions if the user agent is a mobile device
         */
        userAgentDetection: function(){
          
            if( MFA.helpers.isUserAgent().ipad ) {
              $('body').addClass('is_mobile is_tablet');
            }
            else if( MFA.helpers.isUserAgent().mobile ) {
              $('body').addClass('is_mobile');
            }
            else {
              $('body').addClass('non_mobile');
            }
        },
 
        /**
         * isBrowser
         * Determine the browser based on regex matching the navigator
         * @return {Boolean}
         */
        isBrowser: function() {
            return {
                desktop_chrome   : (window.chrome ? true : false),
                iphone_chrome    : ((navigator.userAgent.match(/(iPod|iPhone|iPad)/) && navigator.userAgent.match(/AppleWebKit/) && navigator.userAgent.match('CriOS')) ? true : false),
                iphone_safari    : ((navigator.userAgent.match(/(iPod|iPhone|iPad)/) && navigator.userAgent.match(/AppleWebKit/) && !navigator.userAgent.match('CriOS')) ? true : false),
                android_native   : (navigator.userAgent.indexOf('Android') > -1 && navigator.userAgent.indexOf('Mozilla/5.0') > -1 && navigator.userAgent.indexOf('AppleWebKit') > -1 && navigator.userAgent.indexOf('Chrome') <= -1),
                android_chrome   : (navigator.userAgent.indexOf('Android') > -1 && navigator.userAgent.indexOf('Mozilla/5.0') > -1 && navigator.userAgent.indexOf('AppleWebKit') > -1 && navigator.userAgent.indexOf('Chrome') > -1),
                android_samsung  : (navigator.userAgent.indexOf('Android') > -1 && navigator.userAgent.indexOf('Mozilla/5.0') > -1 && navigator.userAgent.indexOf('AppleWebKit') > -1 && navigator.userAgent.indexOf('Chrome') > -1 && navigator.userAgent.indexOf('SCH') > -1)
            }
        },
 
        /**
         * onLocationHash
         * Run a callback function when a string is the location hash
         * @param  {String}   hash_string
         * @param  {Function} callback
         */
        onLocationHash: function(hash_string, callback) {
 
            if( window.location.hash ) {
                var hash = window.location.hash.substring(1); 
                
                if ( hash === hash_string ) {
                    callback();
                }
            } else {
                return false;
            }
        },
 
        /**
         * preloadImages
         * Preload images by passing in array of url strings
         * @param  {Array} array
         */
        preloadImages: function(array, callback) {
 
            var promises = [];
 
            for ( var i = 0; i < array.length; i++ ) {
              (function (url, promise) {
                var img = new Image();
 
                img.onload = function() {
                  promise.resolve();
                };
 
                img.src = url;
 
                console.log('%cPreloaded', 'color:#4f89d1;', url);
 
              })(array[i], promises[i] = $.Deferred());
              
            }
 
            $.when.apply($, promises).done(function() {
              callback();
            });
 
 
        },
 
        /**
         * inputPlaceholders
         * Faux placeholders for old browsers
         * @required Modernizr library
         */
        inputPlaceholders: function(selector) {
 
            if( !Modernizr.input.placeholder) {
 
                $(selector).focus(function() {
 
                    var input = $(this);
 
                    if ( input.val() == input.attr('placeholder') ) {
                        input.val('')
                        input.removeClass('placeholder');
                    }
 
                }).blur(function() {
 
                  var input = $(this);
 
                    if ( input.val() == '' || input.val() == input.attr('placeholder') ) {
                        input.addClass('placeholder');
                        input.val(input.attr('placeholder'));
                    }
 
                }).blur();
 
                $(selector).parents('form').submit(function() {
 
                    $(this).find('[placeholder]').each(function() {
                        
                        var input = $(this);
 
                        if (input.val() == input.attr('placeholder')) {
                            input.val('');
                        }
                    })
                });
            }
        },
 
 
        /**
         * openSharePane
         * Open a small popup, used for social share windows
         * @param  {String} url
         */
        openSharePane: function(url) {
            window.open( url, "socialShareWindow", "status = 1, height = 500, width = 650, resizable = 0" );
        },
 
 
        /**
         * renderHTMLPartial
         * Render an HTML partial to a page (hacky, work-in-progress, do-not-ever-use-in-production)
         * @param  {String} file_path
         */
        renderHTMLPartial: function(file_path, target_id) {
            $.ajax({
                url: file_path,
                dataType: 'html'
            })
            .done(function (data) {
                console.log('%cIncluding partial', 'color:red', file_path);
 
                var html = data.split("\n").join("");
 
                document.getElementById(target_id).innerHTML = html;
            })
        },
 
        /**
         * animateScroll
         * Scroll the window to the target element
         * @param  {String} target
         * @param  {Integer} duration
         * @param  {Sting} easing
         * @param  {Integer} offset
         */
        animateScroll: function(target, duration, easing, offset) {
            if ( duration === 'auto' ) {
                duration = ((target.offset().top - $(window).scrollTop()) / 3.3 )
            }
            if( target ) {
                if(/(iPhone|iPod)\sOS\s6/.test(navigator.userAgent)){
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, duration, easing);
                } else {
                    $('html, body').animate({
                        scrollTop: target.offset().top - (offset)
                    }, duration, easing);
                }
            }
        },
 
        testFunc: function() {
            console.log(this);
        }
    }
 
 
 
    /**
     * Animate Scroll
     */
    
 
})(jQuery);
};