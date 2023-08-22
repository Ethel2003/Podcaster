jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed:'fast'
	});
});

function videography_filmmaker_menu_open() {
	jQuery(".side-menu").addClass('open');
}
function videography_filmmaker_menu_close() {
	jQuery(".side-menu").removeClass('open');
}

function videography_filmmaker_search_show() {
	jQuery(".search-outer").addClass('show');
	jQuery(".search-outer").fadeIn();
}
function videography_filmmaker_search_hide() {
	jQuery(".search-outer").removeClass('show');
	jQuery(".search-outer").fadeOut();
}

function videography_filmmaker_social_show() {
	if (jQuery(".social-icon").hasClass("opened")) {
	  jQuery(".social-icon").removeClass("opened");
	} else {
	  jQuery(".social-icon").addClass("opened");
	}
}

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header px-lg-3 px-2');
		else sticky.removeClass('fixed-header px-lg-3 px-2');
	});

	// Back to top
	jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 0) {
      	jQuery('.scrollup').fadeIn();
      } else {
        jQuery('.scrollup').fadeOut();
      }
    });
    jQuery('.scrollup').click(function () {
      jQuery("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });

    // Slider
		var carousel_thumbs = jQuery("#slider .owl-carousel").owlCarousel({
			margin:20,
	    nav: false,
	    autoplay : true,
	    lazyLoad: true,
	    autoplayTimeout: 3000,
	    loop: false,
	    dots:false,
	    responsive: {
	      0: {
	        items: 1
	      },
	      600: {
	        items: 2
	      },
	      1000: {
	        items: 4
	      }
	    },
	    autoplayHoverPause : true,
	    mouseDrag: true
		  
		});
	});

	// Window load function
	window.addEventListener('load', (event) => {
		jQuery(".preloader").delay(2000).fadeOut("slow");
	});

})( jQuery );

( function( window, document ) {
	function videography_filmmaker_keepFocusInMenu() {
		document.addEventListener( 'keydown', function( e ) {
			const videography_filmmaker_nav = document.querySelector( '.side-menu' );

			if ( ! videography_filmmaker_nav || ! videography_filmmaker_nav.classList.contains( 'open' ) ) {
				return;
			}

			const elements = [...videography_filmmaker_nav.querySelectorAll( 'input, a, button' )],
				videography_filmmaker_lastEl = elements[ elements.length - 1 ],
				videography_filmmaker_firstEl = elements[0],
				videography_filmmaker_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && videography_filmmaker_lastEl === videography_filmmaker_activeEl ) {
				e.preventDefault();
				videography_filmmaker_firstEl.focus();
			}

			if ( shiftKey && tabKey && videography_filmmaker_firstEl === videography_filmmaker_activeEl ) {
				e.preventDefault();
				videography_filmmaker_lastEl.focus();
			}
		} );
	}

	
	
	function videography_filmmaker_keepfocus_search() {
		document.addEventListener( 'keydown', function( e ) {
			const videography_filmmaker_search = document.querySelector( '.search-outer' );

			if ( ! videography_filmmaker_search || ! videography_filmmaker_search.classList.contains( 'show' ) ) {
				return;
			}

			const elements = [...videography_filmmaker_search.querySelectorAll( 'input, a, button' )],
				videography_filmmaker_lastEl = elements[ elements.length - 1 ],
				videography_filmmaker_firstEl = elements[0],
				videography_filmmaker_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && videography_filmmaker_lastEl === videography_filmmaker_activeEl ) {
				e.preventDefault();
				videography_filmmaker_firstEl.focus();
			}

			if ( shiftKey && tabKey && videography_filmmaker_firstEl === videography_filmmaker_activeEl ) {
				e.preventDefault();
				videography_filmmaker_lastEl.focus();
			}
		} );
	}

	videography_filmmaker_keepFocusInMenu();

	videography_filmmaker_keepfocus_search();
} )( window, document );
