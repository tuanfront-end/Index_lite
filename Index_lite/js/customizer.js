/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

// ( function( $ ) {

// 	// Site title and description.
// 	wp.customize( 'blogname', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-title a' ).text( to );
// 		} );
// 	} );
// 	wp.customize( 'blogdescription', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-description' ).text( to );
// 		} );
// 	} );

// 	// Header text color.
// 	wp.customize( 'header_textcolor', function( value ) {
// 		value.bind( function( to ) {
// 			if ( 'blank' === to ) {
// 				$( '.site-title a, .site-description' ).css( {
// 					'clip': 'rect(1px, 1px, 1px, 1px)',
// 					'position': 'absolute'
// 				} );
// 			} else {
// 				$( '.site-title a, .site-description' ).css( {
// 					'clip': 'auto',
// 					'position': 'relative'
// 				} );
// 				$( '.site-title a, .site-description' ).css( {
// 					'color': to
// 				} );
// 			}
// 		} );
// 	} );
// } )( jQuery );

jQuery(document).ready(function($) {

    $(".eden_menu-toggle").click(function(event) {
        $(".navigation-container-wrap .eden-navigation-main nav ul").toggle();
        $(".navigation-container-wrap .eden-navigation-main nav li ul").toggle();

    });
    // $(".navigation-container-wrap .eden-navigation-main nav ul li").hover(function(event) {
    //     $(this).has('ul').toggle();
    // });
     $("#owl-demo").owlCarousel({
 
      //autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 


 /*  Slider Show Js - owlCarousel  */
//Slider show -js------------------------------------
      var myIndex = 0;
      carousel();
     
      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (x.length>0) {
            for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
            }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1;}
              if (myIndex < 1) {myIndex = x.length;}
              x[myIndex-1].style.display = "block";
              time = setTimeout(carousel, 6000); // Change image every 2 seconds
          }
          
      }

      $('.prev-slideshow').click(function(event) {
            clearTimeout(time);
           $('.process').animate({width: '0%'}, 3500);
           myIndex = $('.mySlides:visible').index() - 1 ;
           $('.mySlides img').removeClass('slideInUp');
           $('.mySlides img').addClass('slideInLeft');
           carousel() ;
       });
       $('.next-slideshow').click(function(event) {
           clearTimeout(time);
           myIndex = $('.mySlides:visible').index() + 1 ;
           $('.mySlides img').removeClass('slideInUp');
           $('.mySlides img').addClass('slideInLeft');
           carousel() ;
       });

// End slideShow-js------------------------------------

//Testtimonials-Slider show -js------------------------------------
      var myIndex_2 = 0;
      carousel_2();
     
      function carousel_2() {
          var i;
          var x = document.getElementsByClassName("mySlides_2");
          if (x.length>0) {
            for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
            }
              myIndex_2++;
              if (myIndex_2 > x.length) {myIndex_2 = 1;}
              if (myIndex_2 < 1) {myIndex_2 = x.length;}
              x[myIndex_2-1].style.display = "block";
             // time_2 = setTimeout(carousel_2, 4000); // Change image every 2 seconds
          }
          
      }

      $('.prev-slideshow-2').click(function(event) {
            //clearTimeout(time);
           $('.process').animate({width: '0%'}, 3500);
           myIndex_2 = $('.mySlides_2:visible').index() - 1 ;
           
           carousel_2() ;
       });
       $('.next-slideshow-2').click(function(event) {
           //clearTimeout(time);
           myIndex_2 = $('.mySlides_2:visible').index() + 1 ;
           
           carousel_2() ;
       });

  // End Testtimonials-slideShow-js------------------------------------


  $('.panel-title a').click(function(){
    //$(this).addClass('class_name')
    $(this).toggleClass('active');
  });






    (function ($) {
      $.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
          // set options for current element
          var settings = $.extend({}, $.fn.countTo.defaults, {
            from:            $(this).data('from'),
            to:              $(this).data('to'),
            speed:           $(this).data('speed'),
            refreshInterval: $(this).data('refresh-interval'),
            decimals:        $(this).data('decimals')
          }, options);
          
          // how many times to update the value, and how much to increment the value on each update
          var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;
          
          // references & variables that will change with each update
          var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};
          
          $self.data('countTo', data);
          
          // if an existing interval can be found, clear it first
          if (data.interval) {
            clearInterval(data.interval);
          }
          data.interval = setInterval(updateTimer, settings.refreshInterval);
          
          // initialize the element with the starting value
          render(value);
          
          function updateTimer() {
            value += increment;
            loopCount++;
            
            render(value);
            
            if (typeof(settings.onUpdate) == 'function') {
              settings.onUpdate.call(self, value);
            }
            
            if (loopCount >= loops) {
              // remove the interval
              $self.removeData('countTo');
              clearInterval(data.interval);
              value = settings.to;
              
              if (typeof(settings.onComplete) == 'function') {
                settings.onComplete.call(self, value);
              }
            }
          }
          
          function render(value) {
            var formattedValue = settings.formatter.call(self, value, settings);
            $self.html(formattedValue);
          }
        });
      };
      
      $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
      };
      
      function formatter(value, settings) {
        return value.toFixed(settings.decimals);
      }
    }(jQuery));

    jQuery(function ($) {
      // custom formatting example
      $('#count-number').data('countToOptions', {
      formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, '');
      }
      });
      
      // start all the timers
      $('.timer').each(count);  
      
      function count(options) {
      var $this = $(this);
      options = $.extend({}, options || {}, $this.data('countToOptions') || {});
      $this.countTo(options);
      }
    });


// Js add placeHolder for Contac form 7

  $(".contact-form input.namee").attr("placeholder", "Name*");
  $(".contact-form input.namee2").attr("placeholder", "Surname");
  $(".contact-form input.maill").attr("placeholder", "Email");
  $(".contact-form input.phonee").attr("placeholder", "Phone number");

  $(".contact-form textarea.gee").attr("placeholder", " Your message");
    









    // WOW js
    new WOW().init();


});

